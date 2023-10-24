<?php


use App\Http\Controllers\MemberCaptureController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ClaimsController;
use App\Http\Controllers\PDFController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Str;
use App\Http\Controllers\UnlockUserMail;
use App\Http\Controllers\PassResetMail;
use App\Http\Controllers\MainmemberController;
use App\Http\Controllers\DB;
use App\Http\Controllers\BrokerClientController;
use App\Http\Controllers\users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });
//    completed
    Route::get('/tables-member-capture-in-progress', [TableController::class, 'indexMemberCapture']);
    Route::get('/tables-member-capture-completed', [TableController::class, 'indexMemberCaptureCompleted']);
    // in-progress
    Route::get('/tables-claims-completed', [TableController::class, 'indexClaimsCompleted']);
    Route::get('/tables-claims-in-progress', [TableController::class, 'indexClaimsInProgress']);
    

    Route::delete('/tables-member-capture-delete/{id}', [TableController::class, 'destroyMemberCaptureTableData']);

    Route::resource('/dashboard', DashboardController::class);
    Route::post('/dashboard/claims/{id}', [DashboardController::class, 'claims']);

    //Member captures Form
    Route::resource("/member-capture", MemberCaptureController::class)->except(['update', 'edit']);
    Route::put('/member-capture/{id}', [MemberCaptureController::class, 'update']);
    Route::get('/member-capture/{member_capture}/edit', [MemberCaptureController::class, 'edit'])->name('member-capture.edit');
    Route::post('/check-main-member-id', [MemberCaptureController::class, 'checkMainMemberId']);
    Route::post('/in-progress', [MemberCaptureController::class, 'inProgress']);

    //pdf related
    Route::get('/pdfgenerate',[PDFController::class, 'domppdf']);//pdf related

    //Claims Form
    Route::resource("/member-claim", ClaimsController::class);
    Route::post('/check-main-member-id-claim', [ClaimsController::class, 'checkMainMemberId']);

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/policy-payments', [AdminController::class, 'policy_payments']);
    

    //login related
Route::post('/login',  [AuthController::class, 'login']);
Route::get('/logout',  [AuthController::class, 'logout']);


//account-lock related
Route::get('/account-lock',  [AuthController::class, 'acc_lock']);
Route::post('/unlock',  [AuthController::class, 'unlock']);
Route::get('/reset-password/{token}',  [AuthController::class, 'change_password']);
Route::post('/new-password',  [AuthController::class, 'new_password']);

//forgot password
Route::get('/forgotten-password',  [AuthController::class, 'forgotten_password']);
Route::post('/change-forgotpssword',  [AuthController::class, 'change_forgotpssword']);
Route::post('/new-forgottenpassword',  [AuthController::class, 'new_forgottenpassword']);

//register user related route
Route::get('/register-user',  [AuthController::class, 'register_user']);
Route::post('/postsignup',  [AuthController::class, 'signupsave']);

//online payment
Route::get('/payment', [PaymentController::class, 'showPaymentForm']);
Route::post('/process-payment', [PaymentController::class, 'processPayment']);

//card online payment route related
Route::get('/card-payment', [UserController::class, 'card_Form']);
Route::post ( '/', [UserController::class,'call'] );


Route::resource("/member-claim", ClaimsController::class);
Route::post('/check-main-member-id-claim', [ClaimsController::class, 'checkMainMemberId']);

// find member
Route::get('/view-member/{id}', 'mainmemberController@view_member');
Route::get('/find-member', 'mainmemberController@find_member');
Route::get('/find-broker', [mainmemberController::class, 'find_broker']);


Route::resource('/completed-member', myMemberrController::class,);

// individual route related 

Route::get('/broker-clients/{mm_id}', 'BrokerClientController@broker_clients');

Route::get('/update_extended_member/{mm_id}', function ($mm_id) {
    return view('forms.mainmember_edit', ['mm_id' => $mm_id]);
});

Route::get('/update_extended_member/{em_id}', function ($em_id) {
    return view('forms.extendedmember', ['em_id' => $em_id]);
});
Route::get('/update_beneficiary_member/{bd_id}', function ($bd_id) {
    return view('forms.beneficiarymember', ['bd_id' => $bd_id]);
});


//mainmember edit 
Route::get('/update_extended_member/{mm_id}', function ($mm_id) {
    return view('forms.mainmember_edit', ['mm_id' => $mm_id]);
});

Route::get('verification/send', 'VerificationController@send')->name('verification.send');

//group Auth
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

//user-profile related
Route::get('/user_profile','UserProfileController@index');
Route::post('/user-profile','UserProfileController@user_edit');
Route::post('/usernew-password', 'UserProfileController@usernew_password');

// Route::post('/new-forgottenpassword',  [UserProfileController::class, 'new_forgottenpassword']);


