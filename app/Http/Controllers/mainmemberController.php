<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Mail\captured_email;
use App\Models\users;

class MainmemberController extends Controller
{
    

    public function find_broker()
{
    $userbrokers = DB::table('users')
                    ->get();

    return view('Admin.findbroker', ['userbrokers' => $userbrokers]);
}

public function completed_member()
{
    $usercompletedmember = DB::table('users')
                    ->get();

    return view('Admin.completedMember', ['usercompletedmember' => $usercompletedmember]);
}

public function find_member()
{

    return view('Admin.find_member');
}
//delete broker
public function destroy(broker $broker)
{
    $broker->delete();
                    
    return redirect()->route('broker.index')->with('success', 'broker deleted successfully');
}
public function delete_broker($id)
{
    $broker = users::find($id);

    if (!$broker) {
        // Handle the case where the user doesn't exist
        return redirect()->back()->with('error', 'Broker not found');
    }

    $broker->delete();

    return redirect()->back()->with('success', 'Broker deleted successfully');
}


public function view_member($mainMemberId)
{
    $mainmember = DB::table('main_member')
        ->where('mm_id', $mainMemberId)
        ->first();

    // dd($mainmember);
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

    $newarray = array_merge($members,$extendeda,$fullbenefit);

    return view('forms.viewmember',$newarray );
}

}




