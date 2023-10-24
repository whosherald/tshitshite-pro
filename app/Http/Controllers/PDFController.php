<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;

class PDFController extends Controller
{

    public function domppdf(Request $request)
    {
        if (Session::has('mainMemberId')) {
            $mainMemberId = Session::get('mainMemberId');
            $mainMember = DB::table('main_member')->where('mm_id', $mainMemberId)->first();
            $saleRepId = Session::get('saleRepId');
            $saleRep = DB::table('sales_representative')->where('sales_rep_id', $saleRepId)->first();
            $em_id = Session::get('em_id');
            $extendeddata = DB::table('extended_member')->where('em_id', $em_id)->first();

            if ($mainMember) {
                $sectionOne = true;
            } else {
                $sectionOne = false;
            }

            $members = [
                'mainmember' => DB::table('main_member')
                    ->leftJoin('policy_details', 'policy_details.mm_id', '=', 'main_member.mm_id')
                    ->where('main_member.mm_id', $mainMemberId)
                    ->first()
            ];
            $extendeda = [
                'extended' => DB::table('extended_member')
                ->leftJoin('policy_details', 'policy_details.mm_id', '=', 'extended_member.mm_id')
                ->where('extended_member.mm_id', $mainMemberId)
                ->get()
            ];

            $fullbenefit = [
                'benefitdatas' => DB::table('beneficiary_details')
                ->where('mm_id', $mainMemberId)
                ->get()
            ];
            // join or merge $members and $extended
            $newarray = array_merge($members,$extendeda,$fullbenefit);
            // dd($newarray);s
            $pdf = PDF::loadview('Admin.pdf_file',$newarray);
            return $pdf->stream('pdf_file.pdf', array('Attachment' => 0));
        }
    }

}

