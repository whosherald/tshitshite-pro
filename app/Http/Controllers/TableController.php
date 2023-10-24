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
use App\Models\Claims_model;
use App\Models\Cliamant_Bank_Model;
use App\Models\Deceased_model;
use DB;
use Session;
// session_start();

class TableController extends Controller
{
    //member-capture
    public function indexMemberCapture()
    {
        $inProgressFormsTable = In_Progress_Model::all();
        $completedFormsTable = Complete_Progress_Model::all();

        // Member-Capture
        $memberCapture_CompletedForm_MainMembers = [];
        $memberCapture_InProgressForm_MainMembers = [];

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
        }

        return view('Tables.member-capture-tables.In-progress', [
            'memberCapture_CompletedForm_MainMembers' => $memberCapture_CompletedForm_MainMembers,
            'memberCapture_InProgressForm_MainMembers' => $memberCapture_InProgressForm_MainMembers,
        ]);

    }

    public function indexMemberCaptureCompleted()
    {
        $inProgressFormsTable = In_Progress_Model::all();
        $completedFormsTable = Complete_Progress_Model::all();

        // Member-Capture
        $memberCapture_CompletedForm_MainMembers = [];
        $memberCapture_InProgressForm_MainMembers = [];

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
        }

        return view('Tables.member-capture-tables.completed', [
            'memberCapture_CompletedForm_MainMembers' => $memberCapture_CompletedForm_MainMembers,
            'memberCapture_InProgressForm_MainMembers' => $memberCapture_InProgressForm_MainMembers,
        ]);

    }

    public function destroyMemberCaptureTableData(string $form_Id)
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
            }

            $completedModel->delete();
        }

        //2. In-ProgressTable
        $inProgressModel = In_Progress_Model::where('form', $form)->where('main_member_id', $mainMemberId)->first();
        if ($inProgressModel) {
            if($form == 'member-capture'){
                //2.2.2 delete member-capture forms
                $this->deleteMemberCaptureForm($mainMemberId);
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

        if ($mainMember) {
            $mainMember->delete();
        }
    }

    //Claims
    public function indexClaimsCompleted()
    {
        $inProgressFormsTable = In_Progress_Model::all();
        $completedFormsTable = Complete_Progress_Model::all();

        // Claims
        $claims_CompletedForm_MainMembers = [];
        $claims_InProgressForm_MainMembers = [];

        //get all the main-members that completed a form
        foreach ($completedFormsTable as $table) {
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
            //get all the main-members that are in-progress claims form
            if ($table->form == 'claims') {
                $mainMemberId = $table->main_member_id;
                $claims_InProgressForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($claims_InProgressForm_MainMember) {
                    $claims_InProgressForm_MainMembers[] = $claims_InProgressForm_MainMember;
                }
            }
        }

        return view('Tables.claims-tables.completed', [
            'claims_CompletedForm_MainMembers' => $claims_CompletedForm_MainMembers,
            'claims_InProgressForm_MainMembers' => $claims_InProgressForm_MainMembers,
        ]);

    }
    public function indexClaimsInProgress()
    {
        $inProgressFormsTable = In_Progress_Model::all();
        $completedFormsTable = Complete_Progress_Model::all();

        // Claims
        $claims_CompletedForm_MainMembers = [];
        $claims_InProgressForm_MainMembers = [];

        //get all the main-members that completed a form
        foreach ($completedFormsTable as $table) {
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
            //get all the main-members that are in-progress claims form
            if ($table->form == 'claims') {
                $mainMemberId = $table->main_member_id;
                $claims_InProgressForm_MainMember = Main_Member::where('mm_id', $mainMemberId)->first();

                if ($claims_InProgressForm_MainMember) {
                    $claims_InProgressForm_MainMembers[] = $claims_InProgressForm_MainMember;
                }
            }
        }

        return view('Tables.claims-tables.In-progress', [
            'claims_CompletedForm_MainMembers' => $claims_CompletedForm_MainMembers,
            'claims_InProgressForm_MainMembers' => $claims_InProgressForm_MainMembers,
        ]);

    }

    public function destroyClaimsTableData(string $form_Id)
    {
        $form_Id_parts = explode(' ', $form_Id);

        $form = $form_Id_parts[0]; // Get the model type (e.g., 'member-capture')
        $mainMemberId = $form_Id_parts[1]; // Get the ID (e.g., '5')

        //1. CompletedTable
        $completedModel = Complete_Progress_Model::where('form', $form)->where('main_member_id', $mainMemberId)->first();
        if ($completedModel) {

            if($form == 'claims'){ //1.2
                //delete claims forms
                $this->deleteClaimsForm($mainMemberId);
            }

            $completedModel->delete();
        }

        //2. In-ProgressTable
        $inProgressModel = In_Progress_Model::where('form', $form)->where('main_member_id', $mainMemberId)->first();
        if ($inProgressModel) {
            if($form == 'claims'){
                //delete claims forms
                $this->deleteClaimsForm($mainMemberId);
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

    public function deleteClaimsForm($mainMemberId){
        Cliamant_Bank_Model::where('mm_id', $mainMemberId)->delete();
        Claims_model::where('mm_id', $mainMemberId)->delete();
        Deceased_model::where('mm_id', $mainMemberId)->delete();
        // Cliamant_Bank_Model::where('mm_id', $mainMemberId)->delete();
    }
}
