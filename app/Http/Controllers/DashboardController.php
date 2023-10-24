<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//member-capture
use App\Models\Sale_Rep_Model;
use App\Models\Main_Member;
use App\Models\Policy_Details_Model;
use App\Models\Capturing_Extended_Member_Model;
use App\Models\Beneficiary_Details_Model;
use App\Models\debit_method_model;
use App\Models\stopOrder_payment_model;
use App\Models\cash_payment_model;
use App\Models\persal_payment_model;
use App\Models\Compliance_Model;
use App\Models\Upload_Model;

//claim form
use App\Models\Claims_model;
use App\Models\Cliamant_Bank_Model;
use App\Models\Deceased_model;

use App\Models\In_Progress_Model;
use App\Models\Complete_Progress_Model;
use DB;
use Session;
// session_start();

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $inProgressFormsTable = In_Progress_Model::all();
        $completedFormsTable = Complete_Progress_Model::all();

        // Member-Capture
        $memberCapture_CompletedForm_MainMembers = [];
        $memberCapture_InProgressForm_MainMembers = [];

        // Claims
        $claims_CompletedForm_MainMembers = [];
        $claims_InProgressForm_MainMembers = [];

        $data = Session::all();

        // Loop through session data
        foreach ($data as $key => $value) {
            // Check if key starts with 'login_'
            if (str_starts_with($key, 'login_')) {
                // This is the key used to store the user's authentication information
                $authKey = $key;
                break;
            }
        }

        //get all the main-members that completed a form
        foreach ($completedFormsTable as $table) {
            //get all the main-members that completed member-capture form
            if ($table->form == 'member-capture') {
                $mainMemberId = $table->main_member_id;
                $memberCapture_CompletedForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($memberCapture_CompletedForm_MainMember) {
                    $memberCapture_CompletedForm_MainMembers[] = $memberCapture_CompletedForm_MainMember;
                }
            }

            //get all the main-members that completed claims form
            if ($table->form == 'claims') {
                $mainMemberId = $table->main_member_id;
                $claims_CompletedForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($claims_CompletedForm_MainMember) {
                    $claims_CompletedForm_MainMembers[] = $claims_CompletedForm_MainMember;
                }
            }
        }

        //get all the main-members that are in-progress form
        foreach ($inProgressFormsTable as $table) {
            //get all the main-members that are in-progress member-capture form
            if ($table->form == 'member-capture') {
                $mainMemberId = $table->main_member_id;
                $memberCapture_InProgressForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($memberCapture_InProgressForm_MainMember) {
                    $memberCapture_InProgressForm_MainMembers[] = $memberCapture_InProgressForm_MainMember;
                }
            }

            //get all the main-members that are in-progress claims form
            if ($table->form == 'claims') {
                $mainMemberId = $table->main_member_id;
                $claims_InProgressForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($claims_InProgressForm_MainMember) {
                    $claims_InProgressForm_MainMembers[] = $claims_InProgressForm_MainMember;
                }
            }
        }

        return view('Admin.dashboard', [
            'memberCapture_CompletedForm_MainMembers' => $memberCapture_CompletedForm_MainMembers,
            'memberCapture_InProgressForm_MainMembers' => $memberCapture_InProgressForm_MainMembers,
            'claims_CompletedForm_MainMembers' => $claims_CompletedForm_MainMembers,
            'claims_InProgressForm_MainMembers' => $claims_InProgressForm_MainMembers,
            // 'authKey' => $authKey,
        ]);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $mainMemberId)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $mainMemberId)
    {
        $mainMember = Main_Member::find($mainMemberId);

        if (!$mainMember) {
            // Handle the case where the main member doesn't exist
            // For example, you can redirect back with an error message
            return redirect()->back()->with('error', 'Main member not found');
        }

        Session::put('mainMemberId', $mainMemberId);

        return redirect('/member-capture');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $form_Id)
    {
        $form_Id_parts = explode(' ', $form_Id);

        $form = $form_Id_parts[0]; // Get the model type (e.g., 'member-capture')
        $mainMemberId = $form_Id_parts[1]; // Get the ID (e.g., '5')

        //1. CompletedTable
        $completedModel = Complete_Progress_Model::where('form', $form)->where('main_member_id', $mainMemberId)->first();
        if ($completedModel) {

            if($form == 'member-capture'){ //1.1
                //delete all forms
                $this->deleteClaimsForm($mainMemberId);
                $this->deleteMemberCaptureForm($mainMemberId);
            }elseif($form == 'claims'){ //1.2
                //delete claims forms
                $this->deleteClaimsForm($mainMemberId);
            }elseif($form == 'burial'){
                //delete burial forms

            }elseif($form == 'mortuary'){
                //delete mortuary forms

            }elseif($form == 'tombstone'){
                //delete tombstone forms

            }
            $completedModel->delete();
        }

        //2. In-ProgressTable
        $inProgressModel = In_Progress_Model::where('form', $form)->where('main_member_id', $mainMemberId)->first();
        if ($inProgressModel) {
            if($form == 'member-capture'){
                //2.2.2 delete member-capture forms
                $this->deleteMemberCaptureForm($mainMemberId);
            }elseif($form == 'claims'){
                //delete claims forms
                $this->deleteClaimsForm($mainMemberId);

            }elseif($form == 'burial'){
                //delete burial forms
            }elseif($form == 'mortuary'){
                //delete mortuary forms
            }elseif($form == 'tombstone'){
                //delete tombstone forms
            }

            //2.2.3 delete Inprogress
            $inProgressModel->delete();
        }

        // Redirect back to the member-capture page with a flash message
        $response = [
            'message' => "done",
            'inProgressModel' => $inProgressModel,
            'completedModel' => $completedModel,
            'form_Id' => $form_Id,
            'form' => $form,
            'mainMemberId' => $mainMemberId,
        ];
        return response()->json($response);
        // return redirect('/dashboard')->with('flash_message', 'Member deleted successfully');
    }

    public function claims($mainMemberId)
    {
        Session::put('memberClaims_mainMemberId', $mainMemberId);
        $response = [
            'message' => "done",
        ];
        return response()->json($response);
    }

    public function deleteMemberCaptureForm($mainMemberId){
        //section 1
        $mainMember = Main_Member::find($mainMemberId);
        Sale_Rep_Model::where('sales_rep_id', $mainMember->sales_rep_id)->delete();

        //section 2
        Policy_Details_Model::where('mm_id', $mainMemberId)->delete();

        //section 3
        $extendedMembers = Capturing_Extended_Member_Model::where('mm_id', $mainMemberId)->get();
        foreach ($extendedMembers as $extendedMember) {
            $extendedMember->delete();
        }

        //section 4
        $beneficiaryDetails = Beneficiary_Details_Model::where('mm_id', $mainMemberId)->get();
        foreach ($beneficiaryDetails as $beneficiaryDetail) {
            $beneficiaryDetail->delete();
        }

        //section 5
        debit_method_model::where('mm_id', $mainMemberId)->delete();
        stopOrder_payment_model::where('mm_id', $mainMemberId)->delete();
        cash_payment_model::where('mm_id', $mainMemberId)->delete();
        persal_payment_model::where('mm_id', $mainMemberId)->delete();

        //section 7
        Compliance_Model::where('mm_id', $mainMemberId)->delete();

        //section 8
        Upload_Model::where('mm_id', $mainMemberId)->delete();
        if ($mainMember) {
            $mainMember->delete();
        }
    }

    public function deleteClaimsForm($mainMemberId){
        Cliamant_Bank_Model::where('mm_id', $mainMemberId)->delete();
        Claims_model::where('mm_id', $mainMemberId)->delete();
        Deceased_model::where('mm_id', $mainMemberId)->delete();
        // Cliamant_Bank_Model::where('mm_id', $mainMemberId)->delete();
    }
}
