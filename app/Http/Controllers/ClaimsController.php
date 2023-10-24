<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claims_model;
use App\Models\Cliamant_Bank_Model;
use App\Models\Deceased_model;
use App\Models\In_Progress_Model;
use App\Models\Complete_Progress_Model;
use App\Models\Main_Member;
use DB;
use Session;
// session_start();

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->flush();
        // request()->session()->regenerateToken();
        if(Session::get('memberClaims_formCompleted') == true){
            request()->session()->regenerateToken();
        }
        //Initialisation
        //section1
        // $mainMemberId='false';
        $mainMemberId=null;
        $claims = null;
        $sectionOne=false;
        $section=1;
        $nextState=0;
        $mainMember=null;
        //section2
        $claims=null;
        //section3
        $deceased=null;
        //section4
        $cliamant_bank=null;


        if(Session::has('memberClaims_mainMemberId')){ //if not inprogress but have not completed form during refresh
            $mainMemberId = Session::get('memberClaims_mainMemberId'); //get mainmemberid
            $section=Session::get('memberClaims_currentSection'); //get section number
            if(is_null($section)){
                $section=1;
            }
            if (Session::has('memberClaims_nextState')){ //get next state
                $nextState=Session::get('memberClaims_nextState');
                if(is_null($nextState)){
                    $nextState=0;
                }
                Session::forget('memberClaims_nextState');
                Session::put('memberClaims_currentSection', $section+$nextState);
            }
        }

        //initialisation complete

        if ($mainMemberId !='false') {

            $mainMember = $mainMember = DB::table('main_member')->where('mm_id', $mainMemberId)->first();

            if($mainMember){$sectionOne=true;}
            else{$sectionOne=false;}

            //section 1

            //section 2
            $claims = DB::table('claims')->where('mm_id', $mainMemberId)->first();
            //section 3
            $deceased= DB::table('Deceased')->where('mm_id', $mainMemberId)->first();
            //section 4
            $cliamant_bank = DB::table('cliamant_bank')->where('mm_id', $mainMemberId)->first();
        }


        return view('forms.member_claim', [
            'mainMemberId' => $mainMemberId,
            'mainMember' => $mainMember,
            'claims' => $claims,
            'deceased' => $deceased,
            'cliamant_bank' => $cliamant_bank,
            'sectionOne' => $sectionOne,
            'section' => $section,
            'nextState'=>$nextState,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        Session::put('memberClaims_formCompleted', false);

        $permission=false;
         // Retrieve mainMemberId from session
        $idNumber= $request->input('id_number');

        if($this->formPermission($idNumber)){
            $permission=true;
            $mainMemberId = Session::get('memberClaims_mainMemberId');

            if ($section === 'section1') {
                // Process section 2 data
                // **********figure how to get the main-memberid
                $section=1;
                //making it to be in progress by default
                $inProgress = In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->first();
                if (!$inProgress) {
                    $inProgress = new In_Progress_Model();
                    $inProgress->fill([
                        'main_member_id' => $mainMemberId,
                        'form' => 'claims'
                    ]);
                    $inProgress->save();
                }

                Session::put('memberClaims_mainMemberId', $mainMemberId);
                Session::put('memberClaims_sectionOne', true);
            }
            if ($section === 'section2') {
                // Process section 5 data
                $section=2;
                $claims = new Claims_model();
                $claims->fill($input);
                $claims->mm_id = $mainMemberId;
                $claims->claim_choose_file = isset($input['claim_choose_file']) ? true : false;
                $claims->save();
            }
            if ($section === 'section3') {
                // Process section 6 data
                $section=3;
                $deceased = new Deceased_model();
                $deceased->fill($input);
                $deceased->mm_id = Session::get('memberClaims_mainMemberId');
                $deceased->save();
            }
            if ($section === 'section4') {
                // Process section 4 data
                $section=4;
                $claims_bank = new Cliamant_Bank_Model();
                $claims_bank->fill($input);
                $claims_bank->mm_id = $mainMemberId;
                $claims_bank->save();

                if($nextState == 1){ //if you go out of bound of the form, the form is completed
                    $mainMemberIdExists = Complete_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->exists();

                    if (!$mainMemberIdExists) {
                        $completedProgressMembers = new Complete_Progress_Model();
                        $completedProgressMembers->fill([
                            'main_member_id' => $mainMemberId,
                            'form' => 'claims'
                        ]);
                        $completedProgressMembers->save();
                    }
                    In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->delete();

                    //restarting the form
                    $this->flush();
                    Session::put('memberClaims_formCompleted', true);

                    $response = [
                        'message' => 'Data saved for section ' . $section,
                        'section' => $section,
                        'input' => $input,
                        'nextState' => $nextState,
                    ];
                    return response()->json($response);
                }
            }
        }

        $sectionOne= Session::get('memberClaims_sectionOne');
        Session::put('memberClaims_currentSection', $section); //if reload page on a section the currentTab=$section-1
        Session::put('memberClaims_nextState', $nextState);

        $response = [
            'message' => 'Data saved for section ' . $section,
            'section' => $section,
            'input' => $input,
            'sectionOne' => $sectionOne,
            'nextState' => $nextState,
            'permission' => $permission,
        ];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {
        $section = $request->input('section');
        $nextState= $request->input('nextState');
        $input = $request->except('_token', 'section','nextState');
        $mainMemberId = Session::get('memberClaims_mainMemberId');

        if ($section === 'section1') {
            // Process section 1 data
            $section=1;
            $inProgress = In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->first();
            if (!$inProgress) {
                $inProgress = new In_Progress_Model();
                $inProgress->fill([
                    'main_member_id' => $mainMemberId,
                    'form' => 'claims'
                ]);
                $inProgress->save();
            }

        }elseif ($section === 'section2') {
            $section=2;
            $claims = Claims_model::where('mm_id', $mainMemberId)->first();
            $data=$claims;
            if ($claims) {
                $input = array_filter($input, function ($value, $key) use ($claims) {
                    return !is_null($value) && (!isset($claims->$key) || $value !== $claims->$key);
                }, ARRAY_FILTER_USE_BOTH);
                $claims->claim_choose_file = isset($input['claim_choose_file']) ? 1 : 0;
                $claims->update($input);
            }
        }
        elseif ($section === 'section3') {
            $section=3;
            $deceased = Deceased_model::where('mm_id', $mainMemberId)->first();
            $data=$deceased;
            if ($deceased) {
                $input = array_filter($input, function ($value, $key) use ($deceased) {
                    return !is_null($value) && (!isset($deceased->$key) || $value !== $deceased->$key);
                }, ARRAY_FILTER_USE_BOTH);
                $deceased->update($input);
            }
        }
        elseif ($section === 'section4') {
            $section=4;
            $claims_bank = Cliamant_Bank_Model::where('mm_id', $mainMemberId)->first();
            $data=$claims_bank;
            if ($claims_bank) {
                $input = array_filter($input, function ($value, $key) use ($claims_bank) {
                    return !is_null($value) && (!isset($claims_bank->$key) || $value !== $claims_bank->$key);
                }, ARRAY_FILTER_USE_BOTH);
                $claims_bank->update($input);
            }
        }

        $sectionOne= true;
        Session::put('memberClaims_currentSection', $section); //if reload page on a section the currentTab=$section-1
        Session::put('memberClaims_nextState', $nextState);
        Session::put('memberClaims_formCompleted', false);
        Session::put('memberClaims_sectionOne', true);
        $response = [
            'message' => 'Data updated for section ' . $section,
            'section' => $section,
            'mainMemberId' => $mainMemberId,
            'input' => $input,
            'id' => $id,
            'data' => $data,
            'sectionOne' => $sectionOne,
            'nextState' => $nextState,
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkMainMemberId(Request $request)
    {
        $section = $request->input('section');
        $mainMemberId = Session::get('memberClaims_mainMemberId');
        $model = null;
        $currentPayment = null;
        $mainMemberIdExists = false;

        if ($section === 1 || $section === 'section1') {
            // $model = Cliamant_Bank_Model::class;
        } elseif ($section === 2 || $section === 'section2') {
            $model = Claims_model::class;
        } elseif ($section === 3 || $section === 'section3') {
            $model = Deceased_model::class;
        } elseif ($section === 4 || $section === 'section4') {
            $model = Cliamant_Bank_Model::class;
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
    }

    public function formPermission($idNumber){
        $formPermission=false;
        $mainMemberId = Session::get('memberClaims_mainMemberId');
        $formPermission= $mainMemberId ? true : $this->verifyIDNumber($idNumber);
        return $formPermission;
    }

    public function verifyIDNumber($idNumber)
    {
        $isVerified = false;
        $mainMember = Main_Member::where('id_number', $idNumber)->first();
        if ($mainMember) {
            $isVerified = true;
            Session::put('memberClaims_mainMemberId', $mainMember->mm_id);
        }
        return $isVerified;
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

}
