<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale_Rep_Model;
use App\Models\Main_Member;
use App\Models\Policy_Details_Model;
use App\Models\Capturing_Extended_Member_Model;
use App\Models\Beneficiary_Details_Model;
use App\Models\debit_method_model;
use App\Models\stopOrder_payment_model;
use App\Models\cash_payment_model;
use App\Models\persal_payment_model;
use App\Models\In_Progress_Model;
use App\Models\Complete_Progress_Model;
use App\Models\Compliance_Model;
use App\Models\Upload_Model;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MemberCaptureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::get('formCompleted') == true){
            request()->session()->regenerateToken();
        }

        //Initialisation
        //section1
        $mainMemberId='false';
        $mainMember = null;
        $saleRep = null;
        $sectionOne=false;
        $section=1;
        $nextState=0;
        $message=null;

        //section2
        $policyDetails = null;

        //section3
        $extendedMembers = [];

        //section4
        $beneficiaryMembers = [];

        //section5
        $currentPaymentMethod=null;
        $paymentDebit = null;
        $stopOrderPayment = null;
        $cashPayment = null;
        $persalPayment = null;

        //section7
        $compliance=null;

        //section8
        $uploads=[];
        $upload_id_doc = null;
        $upload_veri_doc = null;

        if(Session::has('mainMemberId')){ //if not inprogress but have not completed form during refresh
            $mainMemberId = (Session::get('mainMemberId')); //get mainmemberid
            $section=Session::get('currentSection'); //get section number
            if(is_null($section)){
                $section=1;
            }
            if (Session::has('nextState')){ //get next state
                $nextState=Session::get('nextState');
                if(is_null($nextState)){
                    $nextState=0;
                }
                Session::forget('nextState');
                Session::put('currentSection', $section+$nextState);
            }
        }
        //initialisation complete

        if ($mainMemberId !='false') {
            //section 1
            try{
                $mainMember = $mainMember = DB::table('main_member')->where('mm_id', $mainMemberId)->first();
                $saleRep = DB::table('sales_representative')->where('sales_rep_id', $mainMember->sales_rep_id)->first();

                if($mainMember){$sectionOne=true;}
                else{$sectionOne=false;}

                //section 2
                $policyDetails = DB::table('policy_details')->where('mm_id', $mainMemberId)->first();

                //section 3
                $extendedMembers = DB::table('extended_member')->where('mm_id', $mainMemberId)->get();

                //section 4
                $beneficiaryMembers = DB::table('beneficiary_details')->where('mm_id', $mainMemberId)->get();

                //section 5
                $currentPaymentMethod=Session::get('currentPayment');
                $paymentDebit = DB::table('payment_debit')->where('mm_id', $mainMemberId)->first();
                $stopOrderPayment = DB::table('stoporder_payment')->where('mm_id', $mainMemberId)->first();
                $cashPayment = DB::table('cash_payments')->where('mm_id', $mainMemberId)->first();
                $persalPayment = DB::table('persal_payments')->where('mm_id', $mainMemberId)->first();

                //Section 7
                $compliance= DB::table('compliance')->where('mm_id', $mainMemberId)->first();

                //section 8
                $uploads = DB::table('uploads')->where('mm_id', $mainMemberId)->get();
                $upload_id_doc = DB::table('uploads')->where('mm_id', $mainMemberId)->whereNotNull('up_id_documents')->first();
                $upload_veri_doc = DB::table('uploads')->where('mm_id', $mainMemberId)->whereNotNull('up_veri_documents')->first();

                if ($upload_id_doc) {
                    $upload_id_doc->up_id_documents = $this->shortenFilePath($upload_id_doc->up_id_documents);

                    if (strpos($upload_id_doc->up_id_documents, 'C:\xampp\tmp') === 0) {
                        $upload_id_doc->up_id_documents = '';
                    }
                }

                if ($upload_veri_doc) {
                    $upload_veri_doc->up_veri_documents = $this->shortenFilePath($upload_veri_doc->up_veri_documents);

                    if (strpos($upload_veri_doc->up_veri_documents, 'C:\xampp\tmp') === 0) {
                        $upload_veri_doc->up_veri_documents = '';
                    }
                }

                foreach ($uploads as $upload) {
                    $upload->up_documents = $this->shortenFilePath($upload->up_documents);

                    if (strpos($upload->up_documents, 'C:\xampp\tmp') === 0) {
                        $upload->up_documents = '';
                    }
                }
            }
            catch (\Exception $e) {
                $errorMessage = $e->getMessage();

                // Construct the error response message
                $errorResponse = [
                    'error' => "An error occurred: $errorMessage. Please try again.",
                ];
                return response()->json($errorResponse);
            }
        }

        $message=Session::get('message');

        return view('forms.member_capture', [
            'mainMemberId' => $mainMemberId,
            'saleRep' => $saleRep,
            'mainMember' => $mainMember,
            'sectionOne' => $sectionOne,
            'policyDetails' => $policyDetails,
            'extendedMembers' => $extendedMembers,
            'beneficiaryMembers' => $beneficiaryMembers,
            'currentPaymentMethod' => $currentPaymentMethod,
            'paymentDebit' => $paymentDebit,
            'stopOrderPayment' => $stopOrderPayment,
            'cashPayment' => $cashPayment,
            'persalPayment' => $persalPayment,
            'compliance' => $compliance,
            'uploads' => $uploads,
            'upload_id_doc' => $upload_id_doc,
            'upload_veri_doc' => $upload_veri_doc,
            'section' => $section,
            'nextState'=>$nextState,
            'message'=>$message,
            'uploads' => $uploads,
        ]);
    }

    // Define the shortenFilePath function
    function shortenFilePath($filePath, $maxLength = 40) {
        if (strlen($filePath) <= $maxLength) {
            return $filePath;
        } else {
            $fileName = basename($filePath);
            $directory = dirname($filePath);
            $maxFileNameLength = $maxLength - strlen($directory) - 1; // Subtract 1 for the slash (/)

            $shortenedFileName = substr($fileName, 0, $maxFileNameLength);
            $shortenedFilePath = $directory . '/' . $shortenedFileName . '...';

            return $shortenedFilePath;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mainMemberId = Session::get('mainMemberId');
        $section = Session::get('currentSection');
        return view('forms.member_capture', ['mainMemberId' => $mainMemberId, 'section' => $section]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //initial state
        $section = $request->input('section');
        $nextState= $request->input('nextState');
        $input = $request->except('_token', 'section','nextState');
        Session::put('formCompleted', false);

        // Session::put('section', $section);
        $mainMemberId = Session::get('mainMemberId'); // Retrieve mainMemberId from session
        // try {
            if ($section === 'section1') {
                // Process section 1 data
                    $section=1;
                    $saleRep = new Sale_Rep_Model();
                    $saleRep->fill($input);
                    $saleRep->save();

                    $mainMember = new Main_Member();
                    $mainMember->fill($input);
                    $mainMember->sales_rep_id = $saleRep->sales_rep_id;
                    $mainMember->save();

                    // Store mainMemberId in session
                    // Retrieve the mainMemberId from the database
                    $mainMemberId = DB::table('main_member')->where('sales_rep_id', $saleRep->sales_rep_id)->value('mm_id');

                    //making it to be in progress by default
                    $inProgress = In_Progress_Model::where('form', 'member-capture')->where('main_member_id', $mainMemberId)->first();
                    if (!$inProgress) {
                        $inProgress = new In_Progress_Model();
                        $inProgress->fill([
                            'main_member_id' => $mainMemberId,
                            'form' => 'member-capture'
                        ]);
                        $inProgress->save();
                    }

                    Session::put('mainMemberId', $mainMemberId);
                    Session::put('saleRepId', $saleRep->sales_rep_id);
                    Session::put('nextState', $nextState);
                    Session::put('sectionOne', true);

                    $saleRepId=$saleRep->sales_rep_id;
                    $sectionOne= Session::get('sectionOne');
                    $response = [
                        'message' => 'Data saved for section ' . $section,
                        'section' => $section,
                        'input' => $input,
                        'sectionOne' => $sectionOne,
                        'nextState' => $nextState,
                    ];

                    Session::put('currentSection', $section); //if reload page on a section the currentTab=$section-1
                    return response()->json($response);
            }
            if ($section === 'section2') {
                // Process section 2 data
                $section=2;
                $policyDetails = new Policy_Details_Model();
                $policyDetails->fill($input);
                $policyDetails->mm_id = Session::get('mainMemberId');
                $policyDetails->save();
            }
            if ($section === 'section3') {
                // Process section 3 data
                $section=3;
                Session::put('currentSection', $section);
                Session::put('nextState', $nextState);
                Session::put('sectionOne', true);

                if($input == null || $input == '' || $input == []){
                    $response = [
                        'message' => 'Data saved for section ' . $section,
                        'section' => $section,
                        'input' => $input,
                        'nextState' => $nextState,
                    ];
                    return response()->json($response);
                }

                $extendedMember = new Capturing_Extended_Member_Model();
                $extendedMember->fill($input);
                $extendedMember->mm_id = Session::get('mainMemberId');
                $extendedMember->save();

                $response = [
                    'message' => 'Data saved for section ' . $section,
                    'section' => $section,
                    'input' => $input,
                    'nextState' => $nextState,
                    'extendedMember' => $extendedMember, // Assuming you want to include the extended member data in the response
                ];
                return response()->json($response);

            }
            if ($section === 'section4') {
                // Process section 4 data
                $section=4;
                Session::put('nextState', $nextState);
                Session::put('currentSection', $section);
                Session::put('sectionOne', true);

                if($input == null || $input == '' || $input == []){
                    $response = [
                        'message' => 'Data saved for section ' . $section,
                        'section' => $section,
                        'input' => $input,
                        'nextState' => $nextState,
                    ];
                    return response()->json($response);
                }
                // Session::put('formCompleted', true);
                $beneficiaryDetails = new Beneficiary_Details_Model();
                $beneficiaryDetails->fill($input);
                $beneficiaryDetails->mm_id = Session::get('mainMemberId');
                $beneficiaryDetails->save();
                $response = [
                    'message' => 'Data saved for section ' . $section,
                    'section' => $section,
                    'input' => $input,
                    'nextState' => $nextState,
                    'beneficiaryMember' => $beneficiaryDetails, // Assuming you want to include the extended member data in the response
                ];
                return response()->json($response);

            }
            if ($section === 'section5') {
                // Process section 5 data
                $section=5;
                Session::put('nextState', $nextState);
                $currentPaymentMethod=Session::get('currentPayment');
                $newPaymentMethod=null;
                $oldPaymentMethodDeleted= false;
                $paymentMethod=null;

                //create new
                if($input['chkDebit'] == true){
                    $paymentMethod = new debit_method_model();
                    $paymentMethod->fill($input);
                    $paymentMethod->mm_id = Session::get('mainMemberId');
                    $paymentMethod->save($input);
                    $newPaymentMethod='chkDebit';
                }
                if($input['chkStop'] == true){
                    $paymentMethod = new stopOrder_payment_model();
                    $paymentMethod->fill($input);
                    $paymentMethod->mm_id = Session::get('mainMemberId');
                    $paymentMethod->save($input);
                    $newPaymentMethod='chkStop';
                }
                if($input['chkCash'] == true){
                    $paymentMethod = new cash_payment_model();
                    $paymentMethod->fill($input);
                    $paymentMethod->mm_id = Session::get('mainMemberId');
                    $paymentMethod->save($input);
                    $newPaymentMethod='chkCash';
                }
                if($input['chkPersal'] == true){
                    $paymentMethod = new persal_payment_model();
                    $paymentMethod->fill($input);
                    $paymentMethod->mm_id = Session::get('mainMemberId');
                    $paymentMethod->save($input);
                    $newPaymentMethod='chkPersal';
                }

                //delete old
                if($newPaymentMethod != $currentPaymentMethod){
                    if ($currentPaymentMethod == 'chkDebit') {
                        $oldPaymentMethod = debit_method_model::where('mm_id', $mainMemberId)->first();
                        if ($oldPaymentMethod) {
                            $oldPaymentMethod->delete();
                            $oldPaymentMethodDeleted = true;
                        }
                    }
                    if ($currentPaymentMethod == 'chkStop') {
                        $oldPaymentMethod = stopOrder_payment_model::where('mm_id', $mainMemberId)->first();
                        if ($oldPaymentMethod) {
                            $oldPaymentMethod->delete();
                            $oldPaymentMethodDeleted = true;
                        }
                    }
                    if ($currentPaymentMethod == 'chkCash') {
                        $oldPaymentMethod = cash_payment_model::where('mm_id', $mainMemberId)->first();
                        if ($oldPaymentMethod) {
                            $oldPaymentMethod->delete();
                            $oldPaymentMethodDeleted = true;
                        }
                    }
                    if ($currentPaymentMethod == 'chkPersal') {
                        $oldPaymentMethod = persal_payment_model::where('mm_id', $mainMemberId)->first();
                        if ($oldPaymentMethod) {
                            $oldPaymentMethod->delete();
                            $oldPaymentMethodDeleted = true;
                        }
                    }
                }

                Session::put('currentPayment', $newPaymentMethod);
                $response = [
                    'message' => 'Data saved for section ' . $section,
                    'section' => $section,
                    'input' => $input,
                    'paymentMethod' => $paymentMethod,
                    'oldPaymentMethodDeleted' => $oldPaymentMethodDeleted,
                    'nextState' => $nextState,
                ];

                return response()->json($response);
            }
            if ($section === 'section6') {
                // Process section 6 data
                $section=6;
            }
            if ($section === 'section7') {
                // Process section 7 data
                $section=7;
                $compliance = new Compliance_Model();
                $compliance->fill($input);
                $compliance->mm_id = Session::get('mainMemberId');
                $compliance->save();

            }
            if ($section === 'section8') {
                // Process section 8 data
                $section=8;
                $fileName=null;
                $upload=null;
                $msg='';
                Session::put('nextState', $nextState);
                Session::put('currentSection', $section);
                Session::put('sectionOne', true);

                if($input == null || $input == '' || $input == []){

                    if($nextState == 1){
                        $mainMemberIdExists = Complete_Progress_Model::where('form', 'member-capture')->where('main_member_id', $mainMemberId)->exists();

                        if (!$mainMemberIdExists) {
                            $completedProgressMembers = new Complete_Progress_Model();
                            $completedProgressMembers->fill([
                                'main_member_id' => $mainMemberId,
                                'form' => 'member-capture'
                            ]);
                            $completedProgressMembers->save();
                        }
                        In_Progress_Model::where('main_member_id', $mainMemberId)->delete();
                        $this->flush();
                        Session::put('formCompleted', true);
                    }

                    $response = [
                        'message' => 'Data saved for section ' . $section,
                        'section' => $section,
                        'input' => $input,
                        'nextState' => $nextState,
                    ];
                    return response()->json($response);
                }

                // $this->saveFile('up_documents');
                $validFileInputs = ['up_documents', 'up_id_documents', 'up_veri_documents'];
                foreach ($validFileInputs as $fileInput) {
                    if (request()->hasFile($fileInput) && request()->file($fileInput)->isValid()) {
                        $fileName = $fileInput;
                        break;
                    }
                }

                if($fileName!=null){
                    if($fileName == 'up_id_documents' || $fileName == 'up_veri_documents'){
                        $existsUpload = Upload_Model::where('mm_id', $mainMemberId)
                                                    ->whereNotNull($fileName)
                                                    ->exists();

                        if (request()->hasFile($fileName) && !$existsUpload) {
                            $uploadedFile = request()->file($fileName);
                            $filePath = $uploadedFile->store($fileName);
                            $input[$fileName] = $filePath;

                            $upload = new Upload_Model();
                            $upload->fill($input);
                            $upload->mm_id = $mainMemberId;
                            $upload->save();

                            $msg= 'Doesnt exists';
                        }
                        else{
                            $upload = Upload_Model::where('mm_id', $mainMemberId)->whereNotNull($fileName)->first();
                            $data=$upload;

                            if ($upload && request()->hasFile($fileName)) {
                                // Update
                                $uploadedFile = request()->file($fileName);
                                $filePath = $uploadedFile->store($fileName);
                                $input[$fileName] = $filePath;

                                $input = array_filter($input, function ($value, $key) use ($upload) {
                                    return !is_null($value) && (!isset($upload->$key) || $value !== $upload->$key);
                                }, ARRAY_FILTER_USE_BOTH);

                                $upload->update($input);
                            }
                            $msg= 'exists';
                        }
                    }

                    if($fileName == 'up_documents'){

                        if (request()->hasFile($fileName)) {
                            $uploadedFile = request()->file($fileName);
                            $filePath = $uploadedFile->store($fileName);
                            $input[$fileName] = $filePath;

                            $upload = new Upload_Model();
                            $upload->fill($input);
                            $upload->mm_id = $mainMemberId;
                            $upload->save();

                            $msg= 'upload';
                        }
                        else{$msg= 'error weird';}
                    }
                }

                $response = [
                    'message' => 'Data saved for section ' . $section,
                    'section' => $section,
                    'input' => $input,
                    'upload' => $upload,
                    'fileName' => $fileName,
                    'msg' => $msg,
                    'nextState' => $nextState,
                ];
                return response()->json($response);
            }

            Session::put('currentSection', $section); //if reload page on a section the currentTab=$section-1
            Session::put('nextState', $nextState);
            $sectionOne= Session::get('sectionOne');

            $response = [
                'message' => 'Data saved for section ' . $section,
                'section' => $section,
                'input' => $input,
                'sectionOne' => $sectionOne,
                'nextState' => $nextState,
            ];
            return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
     public function show(string $id)
    {
        // Fetch the data for the specified resource
        $mainMember = Main_Member::find($id);
        // Check if the resource exists
        if (!$mainMember) {
            // Resource not found, handle the error
            // For example, you can redirect to an error page or show a 404 message
        }
        // Return the view to display the resource data
        return view('forms.member_capture')->with('mainMember', $mainMember);
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
    {
        try {
            // Fetch the data for the specified resource
            $Data = Capturing_Extended_Member_Model::find($id);
            if($Data){
                return view('forms.extendedmember')->with('data', $Data);
            }

            $Data = Beneficiary_Details_Model::find($id);
            if($Data){
                return view('forms.beneficiarymember')->with('data', $Data);
            }

            $Data = Upload_Model::find($id);
            if($Data){
                return view('forms.viewUpload')->with('data', $Data);
            }
        } catch (\PDOException $e) {
            $errorMessage = $e->getMessage();

            // Extract the column name causing the problem
            $columnName = '';
            if (preg_match("/Data too long for column '([^']+)' at row 1/", $errorMessage, $matches)) {
                $columnName = $matches[1];
            } elseif (preg_match("/SQLSTATE\[[^\]]+\]:\s[^\:]+\:\s([^\,]+)/", $errorMessage, $matches)) {
                $columnName = $matches[1];
            }

            // Construct the error response message
            $errorResponse = [
                'error' => "Problem with column '$columnName'. Please check your input and try again.",
            ];
            return response()->json($errorResponse);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            // Construct the error response message
            $errorResponse = [
                'error' => "An error occurred: $errorMessage. Please try again.",
            ];
            return response()->json($errorResponse);
        }
        // Check if the resource exists

        // Return the view to display the edit form for the resource
        return view('forms.member_capture');
    }

    /**
     * Update the specified resource in storage.
     */
     /**
 * Update the specified resource in storage.
 */
    public function update(Request $request, $id)
    {
        $section = $request->input('section');
        $nextState= $request->input('nextState');
        $input = $request->except('_token', 'section','nextState');

        $data= null;
        $saleRepId= Session::get('saleRepId');
        $mainMemberId = Session::get('mainMemberId'); // Retrieve mainMemberId from session
        $paymentMethod= null;

        if($id == 0){ //if on verification form and one of the section buttons have been pressed
            try {
                if ($section === 'section1') {
                    // Process section 5 data
                    $section=1;
                }
                elseif ($section === 'section2') {
                    // Process section 5 data
                    $section=2;
                }
                elseif ($section === 'section3') {
                    // Process section 6 data
                    $section=3;
                }
                elseif ($section === 'section4') {
                    // Process section 7 data
                    $section=4;
                }
                elseif ($section === 'section5') {
                    // Process section 5 data
                    $section=5;
                }

                $sectionOne= true;
                Session::put('currentSection', $section); //if reload page on a section the currentTab=$section-1
                Session::put('nextState', $nextState);
                Session::put('sectionOne', true);

                $response = [
                    'message' => 'Data updated for section ' . $section,
                    'section' => $section,
                    'mainMemberId' => $mainMemberId,
                    'input' => $input,
                    'id' => $id,
                    'sectionOne' => $sectionOne,
                    'nextState' => $nextState,
                ];
                Session::put('formCompleted', false);
                return response()->json($response);
            } catch (\PDOException $e) {
                $errorMessage = $e->getMessage();

                // Extract the column name causing the problem
                $columnName = '';
                if (preg_match("/Data too long for column '([^']+)' at row 1/", $errorMessage, $matches)) {
                    $columnName = $matches[1];
                } elseif (preg_match("/SQLSTATE\[[^\]]+\]:\s[^\:]+\:\s([^\,]+)/", $errorMessage, $matches)) {
                    $columnName = $matches[1];
                }

                // Construct the error response message
                $errorResponse = [
                    'error' => "Problem with column '$columnName'. Please check your input and try again.",
                ];
                return response()->json($errorResponse);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();

                // Construct the error response message
                $errorResponse = [
                    'error' => "An error occurred: $errorMessage. Please try again.",
                ];
                return response()->json($errorResponse);
            }
        }
        //if not on the verification page
        try {
            if ($section === 'section1') {
                // Process section 1 data
                $section=1;
                $mainMember = Main_Member::find($mainMemberId);
                $saleRep = Sale_Rep_Model::find($mainMember->sales_rep_id);

                if ($saleRep) {
                    // $input1 = array_intersect_key($input, (array) $saleRep);
                    $input1 = array_filter($input, function ($value, $key) use ($saleRep) {
                        return !is_null($value) && (!isset($saleRep->$key) || $value !== $saleRep->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    // DB::table('sales_representative')->where('sales_rep_id', $saleRepId)->update($input1);
                    $saleRep->update($input1);
                }

                if ($mainMember) {
                    // $input2 = array_intersect_key($input, (array) $mainMember);
                    $input2 = array_filter($input, function ($value, $key) use ($mainMember) {
                        return !is_null($value) && (!isset($mainMember->$key) || $value !== $mainMember->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    // DB::table('main_member')->where('sales_rep_id', $saleRepId)->update($input2);
                    $mainMember->update($input2);
                }

                $sectionOne= true;
                Session::put('nextState', $nextState);
                Session::put('currentSection', $section); //if reload page on section 1 the currentTab=$section-1
                Session::put('formCompleted', false);

                $response = [
                    'message' => 'Data updated for section ' . $section,
                    'section' => $section,
                    'mainMemberId' => $mainMemberId,
                    'input1' => $input1,
                    '$saleRep' => $saleRep,
                    'input2' => $input2,
                    '$mainMember' => $mainMember,
                    'saleRepId' => $saleRepId,
                    'policyDetails' => $saleRep,
                    'sectionOne' => $sectionOne,
                    'nextState' => $nextState,
                ];

                return response()->json($response);
            }
            elseif ($section === 'section2') {
                $section=2;
                // $policyDetails = DB::table('policy_details')->where('mm_id', $mainMemberId)->first();
                $policyDetails = Policy_Details_Model::where('mm_id', $mainMemberId)->first();
                $data=$policyDetails;
                if ($policyDetails) {
                    // $input = array_intersect_key($input, (array) $policyDetails);
                    $input = array_filter($input, function ($value, $key) use ($policyDetails) {
                        return !is_null($value) && (!isset($policyDetails->$key) || $value !== $policyDetails->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    // DB::table('policy_details')->where('mm_id', $mainMemberId)->update($input);
                    $policyDetails->update($input);
                }
            }
            elseif ($section === 'section3') {
                $section=3;
                $extendedMember = Capturing_Extended_Member_Model::find($id);
                $data=$extendedMember;
                if ($extendedMember) {
                    $input = array_filter($input, function ($value, $key) use ($extendedMember) {
                        return !is_null($value) && (!isset($extendedMember->$key) || $value !== $extendedMember->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    $extendedMember->update($input);
                }

            }
            elseif ($section === 'section4') {
                $section=4;
                $beneficiaryDetails = Beneficiary_Details_Model::find($id);
                $data=$beneficiaryDetails;
                if ($beneficiaryDetails) {
                    // $input = array_intersect_key($input, (array) $beneficiaryDetails);
                    $input = array_filter($input, function ($value, $key) use ($beneficiaryDetails) {
                        return !is_null($value) && (!isset($beneficiaryDetails->$key) || $value !== $beneficiaryDetails->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    $beneficiaryDetails->update($input);
                }
            }
            elseif ($section === 'section5') {
                // Process section 5 data
                $section=5;

                if($input['chkDebit'] == true){
                    $paymentMethod = debit_method_model::where('mm_id', $mainMemberId)->first();
                    Session::put('currentPayment', 'chkDebit');
                }
                if($input['chkStop'] == true){
                    $paymentMethod = stopOrder_payment_model::where('mm_id', $mainMemberId)->first();
                    Session::put('currentPayment', 'chkStop');
                }
                if($input['chkCash'] == true){
                    $paymentMethod = cash_payment_model::where('mm_id', $mainMemberId)->first();
                    Session::put('currentPayment', 'chkCash');
                }
                if($input['chkPersal'] == true){
                    $paymentMethod = persal_payment_model::where('mm_id', $mainMemberId)->first();
                    Session::put('currentPayment', 'chkPersal');
                }

                $data=$paymentMethod;
                if ($paymentMethod) {
                    $input = array_filter($input, function ($value, $key) use ($paymentMethod) {
                        return !is_null($value) && (!isset($paymentMethod->$key) || $value !== $paymentMethod->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    $paymentMethod->update($input);
                }

            }
            elseif ($section === 'section6') {
                // Process section 6 data
                $section=6;
            }
            elseif ($section === 'section7') {
                // Process section 7 data
                $section=7;
                $compliance = Compliance_Model::where('mm_id', $mainMemberId)->first();
                $data=$compliance;
                if ($compliance) {

                    $input = array_filter($input, function ($value, $key) use ($compliance) {
                        return !is_null($value) && (!isset($compliance->$key) || $value !== $compliance->$key);
                    }, ARRAY_FILTER_USE_BOTH);
                    $compliance->update($input);
                }
            }
            elseif ($section === 'section8') {
                // Process section 8 data
                $section=8;
                $uploads = Upload_Model::where('mm_id', $mainMemberId)->first();
                $data=$uploads;
            }

            $sectionOne= true;
            Session::put('currentSection', $section); //if reload page on a section the currentTab=$section-1
            Session::put('nextState', $nextState);
            Session::put('formCompleted', false);
            Session::put('sectionOne', true);
            $response = [
                'message' => 'Data updated for section ' . $section,
                'section' => $section,
                'mainMemberId' => $mainMemberId,
                'input' => $input,
                'id' => $id,
                'data' => $data,
                'sectionOne' => $sectionOne,
                'paymentMethod' => $paymentMethod,
                'nextState' => $nextState,
            ];
            return response()->json($response);

        } catch (\PDOException $e) {
            $errorMessage = $e->getMessage();

            // Extract the column name causing the problem
            $columnName = '';
            if (preg_match("/Data too long for column '([^']+)' at row 1/", $errorMessage, $matches)) {
                $columnName = $matches[1];
            } elseif (preg_match("/SQLSTATE\[[^\]]+\]:\s[^\:]+\:\s([^\,]+)/", $errorMessage, $matches)) {
                $columnName = $matches[1];
            }

            // Construct the error response message
            $errorResponse = [
                'error' => "Problem with column '$columnName'. Please check your input and try again.",
            ];
            return response()->json($errorResponse);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            // Construct the error response message
            $errorResponse = [
                'error' => "An error occurred: $errorMessage. Please try again.",
            ];
            return response()->json($errorResponse);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete the resource from Capturing_Extended_Member_Model if it exists
        try {
            $extendedMember = Capturing_Extended_Member_Model::find($id);
            if ($extendedMember) {
                $extendedMember->delete();
            }

            // Delete the resource from Beneficiary_Details_Model if it exists
            $beneficiary = Beneficiary_Details_Model::find($id);
            if ($beneficiary) {
                $beneficiary->delete();
            }

            // Delete the resource from Beneficiary_Details_Model if it exists
            $uploads = Upload_Model::find($id);
            if ($uploads) {
                $uploads->delete();
            }

            // Redirect back to the member-capture page with a flash message
            return redirect('/member-capture')->with('flash_message', 'Data deleted successfully');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            $errorResponse = [
                'error' => $errorMessage,
            ];

            return response()->json($errorResponse);
        }
    }

    public function checkMainMemberId(Request $request)
    {
        $section = $request->input('section');
        $mainMemberId = Session::get('mainMemberId');
        $model = null;
        $currentPayment = null;
        $mainMemberIdExists = false;

        try {
            if ($section === 1 || $section === 'section1') {
                $model = Main_Member::class;
            } elseif ($section === 2 || $section === 'section2') {
                $model = Policy_Details_Model::class;
            } elseif ($section === 3 || $section === 'section3') {
                $model = Capturing_Extended_Member_Model::class;
            } elseif ($section === 4 || $section === 'section4') {
                $model = Beneficiary_Details_Model::class;
            } elseif ($section === 5 || $section === 'section5') {
                $debit = debit_method_model::class;
                $stopOrder = stopOrder_payment_model::class;
                $cash = cash_payment_model::class;
                $persal = persal_payment_model::class;

                if ($debit::where('mm_id', $mainMemberId)->exists()) {
                    $mainMemberIdExists = true;
                    $currentPayment = 'chkDebit';
                } elseif ($stopOrder::where('mm_id', $mainMemberId)->exists()) {
                    $mainMemberIdExists = true;
                    $currentPayment = 'chkStop';
                } elseif ($cash::where('mm_id', $mainMemberId)->exists()) {
                    $mainMemberIdExists = true;
                    $currentPayment = 'chkCash';
                } elseif ($persal::where('mm_id', $mainMemberId)->exists()) {
                    $mainMemberIdExists = true;
                    $currentPayment = 'chkPersal';
                }

                $response = [
                    'part' => 1,
                    'message' => 'Data updated for section ' . $section,
                    'section' => $section,
                    'mainMemberId' => $mainMemberId,
                    'currentPayment' => $currentPayment,
                    'exists' => $mainMemberIdExists,
                ];
                return response()->json($response);
            } elseif ($section === 7 || $section === 'section7') {
                $model = Compliance_Model::class;
            } elseif ($section === 8 || $section === 'section8') {
                $model = Upload_Model::class;
            }

            if ($model) {
                $mainMemberIdExists = $model::where('mm_id', $mainMemberId)->exists();
                $response=[
                    'part' => 1,
                    'message' => 'Data updated for section ' . $section,
                    'section' => $section,
                    'mainMemberId' => $mainMemberId,
                    // 'input' => $input,
                    'exists' => $mainMemberIdExists,
                ];
                return response()->json($response);
            }

            $response=[
                'part' => 2,
                'message' => 'Data updated for section ' . $section,
                'section' => $section,
                'mainMemberId' => $mainMemberId,
                // 'input' => $input,
                'exists' => false,
            ];
            return response()->json($response);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            $errorResponse = [
                'error' => $errorMessage,
            ];

            return response()->json($errorResponse);
        }
    }

    public function inProgress(Request $request)
    {
        try {
            $this->flush();
            request()->session()->regenerateToken();

            $response = [
                'message' => "done",
            ];
            return response()->json($response);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            $errorResponse = [
                'error' => $errorMessage,
            ];

            return response()->json($errorResponse);
        }
    }

    public function flush(){
        $data = Session::all();

        // Find the key used to store the user's authentication information
        $authKey = null;
        foreach ($data as $key => $value) {
            // Check if key starts with 'login_'
            if (str_starts_with($key, 'login_')) {
                // This is the key used to store the user's authentication information
                $authKey = $key;
                break;
            }
        }

        // Loop through session data again
        foreach ($data as $key => $value) {
            // Preserve authentication information
            if ($key !== $authKey) {
                // Remove session variable
                Session::forget($key);
            }
        }
    }

    public function saveFile($fileName){
        if (request()->hasFile($fileName)) {
            $uploadedFile = request()->file($fileName);
            $filePath = $uploadedFile->store($fileName);
            $input[$fileName] = $filePath;
        }
    }

}
