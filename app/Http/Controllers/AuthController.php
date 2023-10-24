<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use App\Models\User;
session_start();
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Mail;
use App\Mail\UnlockUserMail;
use App\Mail\PassResetMail;
use App\confirm_password;
// session_start();

class AuthController extends Controller
{
    public function AuthCheck(){

        $user_id = Session::get('id');

        if($user_id)

        {

            return;

        }else{

            return Redirect::to('/')->send();

        }

    }
    public function login(Request $request)
    {
       
        $email = $request->email;
        $password = md5($request->password);

        $login = DB::table('users')
                        ->where('email', $email)
                        ->where('password', $password)
                        ->first();


                        // dd($login);

        if($login)
        {

            // echo "i am workings";
            $userId = $login->id;
            $fail_attempts = DB::table('attempts')
                                ->where('user_id', $userId)
                                ->first();
            //
            if($fail_attempts)
            {
                if($fail_attempts->locked === 'true' && $fail_attempts->attempt == 0)
                {
                    Session::put('username', $login->name);
                    return Redirect::to('/account-lock')->withFail(" Sorry but we have reasons to believe that your account is still blocked and has not been resolved! Please contact your system admin or enter your email below");
                }else{
                    if($login->role == 0)
                    {
                        Session::put('id',$login->id);
                        Session::put('username',$login->name);
                        Session::put('role',$login->role);
                        Session::put('email',$login->email);
                        // Session::put('phone', $login->phone);

                        return Redirect::to('/dashboard'); //Executives
                    }else 
                    if($login->role == 2)
                    {
                        Session::put('id',$login->id);
                        Session::put('username',$login->name);
                        Session::put('role',$login->role);
                        Session::put('email',$login->email);
                        // Session::put('phone', $login->phone);

                        return Redirect::to('/dashboard'); //General Managers
                    }else
                    if($login->role == 1)
                    {
                        Session::put('id',$login->id);
                        Session::put('username',$login->name);
                        Session::put('role',$login->role);
                        Session::put('email',$login->email);
                        // Session::put('phone', $login->phone);

                        return Redirect::to('/dashboard'); //General Managers
                    }else
                    {
                        return Redirect::to('/')->withFail(" We see you have correct credentials but we cannot let you access the system without any existing role, check with your system Admin.");
                    }
                }


            }
            
            else{
                if($login->role == 0)
                {
                    Session::put('id',$login->id);
                    Session::put('username',$login->name);
                    Session::put('role',$login->role);
                    Session::put('email',$login->email);
                    // Session::put('phone', $login->phone);

                    return Redirect::to('/dashboard'); //Executives
                }else 
                
                if($login->role == 2)
                {
                    Session::put('id',$login->id);
                    Session::put('username',$login->name);
                    Session::put('role',$login->role);
                    Session::put('email',$login->email);
                    // Session::put('phone', $login->phone);

                    return Redirect::to('/dashboard'); //General Managers
                }else
                if($login->role == 1)
                {
                    Session::put('id',$login->id);
                    Session::put('username',$login->name);
                    Session::put('role',$login->role);
                    Session::put('email',$login->email);
                    // Session::put('phone', $login->phone);

                    return Redirect::to('/dashboard'); //General Managers
                }else
                {
                    return Redirect::to('/')->withFail(" We see you have correct credentials but we cannot let you access the system without any existing role, check with your system Admin.");
                }
            }

        }else{
            $email_check = DB::table('users')
                                ->where('email', $email)
                                ->first();



            if($email_check)
            {
                $userId = $email_check->id;
                $fail_attempts = DB::table('attempts')
                                    ->where('user_id', $userId)
                                    ->first();
               if($fail_attempts) //if user id in attempts table matches the session user id (Person trying to login)
                {
                    if($fail_attempts->locked === 'false' && $fail_attempts->attempt > 0)
                    {
                        if($userId == $fail_attempts->user_id)
                        {
                            $attempt = $fail_attempts->attempt;
                            DB::table('attempts')
                            ->where('user_id',$userId)
                            ->update(['attempt'=>$attempt - 1]);
                            return Redirect::to('/')->withFail(" Either Username or Password not correct! Please try again with authorized credentials. You have ". $attempt . " attempts remaining.");
                        }else{
                            $attempt = 4;
                            $locked = 'false';
                            $data = array();
                            $data['user_id'] = $userId;
                            $data['attempt'] = $attempt;
                            $data['locked'] = $locked;

                            //dd($data);

                            DB::table('attempts')
                                ->where('user_id', $userId)
                                ->insert($data);

                            return Redirect::to('/')->withFail(" Either Username or Password not correct! Please try again with authorized credentials. You have ". $attempt . " attempts remaining.");
                        }
                    }else{
                        Session::put('username', $email_check->name);
                        DB::table('attempts')
                        ->where('user_id',$userId)
                        ->update(['locked'=>'true']);

                        return Redirect::to('/account-lock')->withFail(" Your account has been temporarily locked, please contact your system admin or enter your email below to manually unlock your account");
                    }
                }else{
                    $attempt = 4;
                    $locked = 'false';
                    $data = array();
                    $data['user_id'] = $userId;
                    $data['attempt'] = $attempt;
                    $data['locked'] = $locked;

                    //dd($data);

                    DB::table('attempts')
                        ->where('user_id', $userId)
                        ->insert($data);

                    return Redirect::to('/')->withFail(" Either Username or Password not correct! Please try again with authorized credentials. You have ". $attempt . " attempts remaining.");
                }
            }else{
                return Redirect::to('/')->withFail(" Your Email address is not registered in the system, check with your system administrator");
            }
        }

    }
    public function user_login()
    {
        return view('Admin.dashboard');
    }

    public function forgotten_password()
    {
        
        return view('Admin.forgotten_passwords');
    }
    public function acc_lock()
    {
       
        return view('Admin.account_lock');
    }
    public function change_forgotpssword(Request $request)
    {
        
        $email = $request->email;
        $emailCheck = DB::table('users')
                        ->where('email', $email)
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

            // DB::table('attempts')
            //     ->where('user_id',$userId)
            //     ->update(['locked'=>'false', 'attempt'=>10]);

            Session::put('username', $emailCheck->name);

            DB::table('password_resets')
                ->insert($insert);
            Mail::to($emailCheck->email)->send(new UnlockUserMail($data));
            return Redirect::to('/forgotten-password')->withSuccess(" We've mailed you the link to change your password!");
        }else{
            return Redirect::to('/forgotten-password')->withFail(" Sorry but the email you entered does not seem to be registered in the system");
        }

    }


    public function unlock(Request $request)
    {
        
        $email = $request->email;
        $emailCheck = DB::table('users')
                        ->where('email', $email)
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

            // DB::table('attempts')
            //     ->where('user_id',$userId)
            //     ->update(['locked'=>'false', 'attempt'=>10]);

            Session::put('username', $emailCheck->name);

            DB::table('password_resets')
                ->insert($insert);
            Mail::to($emailCheck->email)->send(new UnlockUserMail($data));
            return Redirect::to('/account-lock')->withSuccess(" We've mailed you the link to unlock your account!");
        }else{
            return Redirect::to('/account-lock')->withFail(" Sorry but the email you entered does not seem to be registered in the system");
        }

    }

    
    public function change_password($token) {
        
        return view('Admin.reset_pass', ['token' => $token]);
    }

    public function new_password(Request $request)
    {
        
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

                DB::table('attempts')
                    ->where('user_id', $checkEmail->id)
                    ->update(['attempt'=>4, 'locked'=>'false']);

                $data = [
                    'password' => $password,
                    'name' => $checkEmail->name
                ];

                Mail::to($email)->send(new PassResetMail($data));
                return Redirect::to('/')->withSuccess(' Password has been changed successfully');
            }else{
                return Redirect::to('/')->withFail(" Sorry, but your passwords do not match");
            }
        }else{
            return back()->withFail(" You entered an email that is not valid or registered in the system!");
        }
    }

    public function new_forgottenpassword(Request $request)
    {
        
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

                DB::table('attempts')
                    ->where('user_id', $checkEmail->id)
                    ->update(['attempt'=>4, 'locked'=>'false']);

                $data = [
                    'password' => $password,
                    'name' => $checkEmail->name
                ];

                Mail::to($email)->send(new PassResetMail($data));
                return Redirect::to('/')->withSuccess(' Password has been changed successfully');
            }else{
                return Redirect::to('/')->withFail(" Sorry, but your passwords do not match");
            }
        }else{
            return back()->withFail(" You entered an email that is not valid or registered in the system!");
        }
    }
    public function logout()
    {
        $this->AuthCheck();
        $user_id = Session::get('id');
        DB::table('users')
            ->where('id', $user_id);
        Session::flush();
        // Auth::logout();
        return Redirect::to('/');
    }

    // register user function
    public function register_user()
    {

        return view('Admin.registration');
    }

    public function signupsave(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        // $data['confirm_password'] = md5($request->confirm-password);

        $role = $request->role;

        if($role == 'Admin'){
            $data['role'] = 1;
        }else if($role == 'User'){
            $data['role'] = 0;
        }

        // dd($data);

        DB::table('users')->insert($data);


        return redirect("dashboard")->withSuccess(' registration has been created successfully');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>md5($data ['password'])
            

        ]);
    }

    
}