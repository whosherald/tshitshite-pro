<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\confirm_password;
use DB;
use Str;
use Mail;
use App\Mail\PassResetMail;
use App\Mail\UnlockUserMail;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Auth\Notification;

class UserProfileController extends Controller
{
    public function index()
    {
        $id = Session::get('id');
        $this->AdminAuthCheck();
        $user_info = array(
            'user_details' => DB::table('users')
                        ->where('id', $id)
                        ->get());
        return view('Admin.user_profile', $user_info);
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('/')->send();
        }
    }

    public function user_edit(Request $request){
        
        $email = $request->email;
        $emailCheck = DB::table('users')
                        ->where('email',$email)
                        ->first();

        if($emailCheck)
        {
           $token = Str::random(64);
            $data = array();
            $insert = array();
            $insert['email'] = $email;
            $insert['token'] = $token;
            $insert['created_at'] = now();
            $data['token'] = $token;
            $data['email'] = $email;
            $data['name'] = $emailCheck->name; 

            $userId = $emailCheck->id;

            Session::put('username', $emailCheck->name);

             DB::table('password_resets')
                ->insert($insert);
            Mail::to($emailCheck->email)->send(new UnlockUserMail($data));
            return Redirect::to('/dashboard')->withSuccess(" We've mailed you the link to change your password!");
        }else{
            return Redirect::to('/user-profile')->withFail(" Sorry but the email you entered does not seem to be registered in the system");
        
        }

        //
        // $user_id = Session::get('id');
        // $data = array();
        // if($request->password == $request->cpassword){
        //     $data['email'] = $request->email;   
        //     $data['password'] = md5($request->password);

        //     return Redirect::to('/dashboard')->withSuccess('Profile successfully updated!');
        // }else{
        //     return Redirect::to('/user-profile')->withFail('Oops!! Passwords did not match, try again.');
        // }
    }



public function send(Request $request)
{
    // Check if the user is already verified
    if ($request->user() && $request->user()->hasVerifiedEmail()) {
        return redirect()->route('home'); // You can change 'home' to your desired route
    }

    // Send the email verification notification
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
}


    public function usernew_password(Request $request)
    {
        $name = $request-> name;
        $email = $request->email;
        $password = $request->password;
        $cpassword = $request->cpassword;

        $checkEmail = DB::table('users')
                            ->where('email', $email)
                            ->first();
        if($checkEmail)
        {
            if($password == $cpassword)
            {
                $password_new = md5($password);
                DB::table('users')
                    ->where('id', $checkEmail->id)
                    ->update(['password' => $password_new]);

                $data = [
                    'password' => $password,
                    'name' => $checkEmail->name
                ];

                Mail::to($email)->send(new PassResetMail($data));
                return Redirect::to('/')->withSuccess(' Password has been changed successfully');
            }else{
                return Redirect::to('/')->withFail(" Sorry, but your passwords do not match");
            }
        }
        
        else{
            return back()->withFail(" You entered an email that is not valid or registered in the system!");
        }

        $checkName = DB::table('users')
        ->where('name', $name)
        ->first();
            if($checkName)
            {
                if($name == $cname)
            {
                $name_new = ($name);
                DB::table('users')
                ->where('id', $checkName->id)
                ->update(['name' => $name_new]);

                $data = [
                'name' => $name,
                'name' => $checkName->name
                ];

                Mail::to($email)->send(new PassResetMail($data));
                return Redirect::to('/')->withSuccess(' Password has been changed successfully');
            }else{
                return Redirect::to('/')->withFail(" Sorry, but your passwords do not match");
                }
            }

            else{
            return back()->withFail(" You entered an email that is not valid or registered in the system!");
        }

    }



    // public function new_password(Request $request)
    // {
    //     $this->AuthCheck();
    //     $email = $request->email;
    //     $password = $request->password;
    //     $cpassword = $request->cpassword;

    //     $checkEmail = DB::table('users')
    //                         ->where('email', $email)
    //                         ->first();
    //     if($checkEmail)
    //     {
    //         if($password == $cpassword)
    //         {
    //             $password_new = md5($password);
    //             DB::table('users')
    //                 ->where('id', $checkEmail->id)
    //                 ->update(['password' => $password_new]);

    //             DB::table('attempts')
    //                 ->where('user_id', $checkEmail->id)
    //                 ->update(['attempt'=>4, 'locked'=>'false']);

    //             $data = [
    //                 'password' => $password,
    //                 'name' => $checkEmail->name
    //             ];

    //             Mail::to($email)->send(new PassResetMail($data));
    //             return Redirect::to('/')->withSuccess(' Password has been changed successfully');
    //         }else{
    //             return Redirect::to('/')->withFail(" Sorry, but your passwords do not match");
    //         }
    //     }else{
    //         return back()->withFail(" You entered an email that is not valid or registered in the system!");
    //     }
    // }

}
