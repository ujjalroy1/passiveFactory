<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



use App\Http\Controllers\Controller;
use App\Mail\EmailOtpMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Mail\passwordMail;
use App\Models\EmailOtp;
use App\Models\wallet;
use Carbon\Carbon;

class registrationController extends Controller
{
    // In UserController.php


public function checkUsername(Request $request)
{
    $username = $request->input('username');
    
    $exists = User::where('name', $username)->exists();
    $exists1=EmailOtp::where('name',$username)->exists();
    return response()->json(['available' => ((!$exists)&&(!$exists1))]);
}
public function store(Request $request)
{

      

    $username = User::where('name', $request->username)->first();
    if (strlen($request->username) <= 0 || $username)
    {
        toastr()->timeOut(5000)->closeButton()->addError('An error occurred. Please fill out the username carefully.');
        return redirect()->back();
    }
    $findUser = User::where('account_id', $request->refer)->first();

    if (!$findUser) {
        toastr()->timeOut(5000)->closeButton()->addError('Referral code not found.');
        return redirect()->back()->withInput(); // Ensures old input is retained
    }
    

    

    // $request->validate([
    //     'username' => ['required', 'string', 'max:255'],
    //     'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
    //     'mobile_number' => ['required', 'string', 'max:255'],
    //     'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
    //     'confirm_password' => ['required', 'string', 'same:password']
    // ]);

    
    $otp = rand(100000, 999999);
    // EmailOtp::updateOrCreate(
    //     ['email' => $request->email], // Condition to check existing record by email
    //     [
    //         'name' => $request->username,
    //         'otp' => $otp,
    //         'expired_at' => Carbon::now()->addMinutes(30),
    //     ]
    // );

        $mailvar=new EmailOtp();
        $mailvar->name=$request->username;
        $mailvar->email=$request->email;
        $mailvar->otp=$otp;
        $mailvar->expired_at=Carbon::now()->addMinutes(30);
        $mailvar->save();

    

        Mail::to($request->email)->send(new EmailOtpMail($otp));
        $request->session()->put('register_email',$request->email);
        $request->session()->put('register_name',$request->username);
        $request->session()->put('register_password',Hash::make($request->password));
        $request->session()->put('register_country_code',$request->country_code);
        $request->session()->put('register_mobile_number',$request->mobile_number);
        $request->session()->put('register_refer',$request->refer);


        return redirect()->route('varify.otp');
    


}   
public function varifyOtp()
{
 
    return view('email_otp_varify');
}
private function generateNextAccountId()
{
    do {
        $randomAccountId = rand(10000000, 99999999);

        $exists = User::where('account_id', $randomAccountId)->exists();

    } while ($exists); 

    return $randomAccountId;
}

public function varifyOtpStore(Request $request)
{

    $emailotp=EmailOtp::where('email',$request->session()->get('register_email'))->where('otp',$request->otp)->where('expired_at','>=',Carbon::now())->first();
    if(!$emailotp)
    {
        toastr()->timeOut(5000)->closeButton()->addError('invalid OTP or expired.');

        return redirect()->back();
    }

    $accountId = $this->generateNextAccountId();//call the account_id

    $email1=$request->session()->get('register_email');
    $name=$request->session()->get('register_name');
    $password=$request->session()->get('register_password');
    $country_code=$request->session()->get('register_country_code');
    $mobile=$request->session()->get('register_mobile_number');
    $refer=$request->session()->get('register_refer');
   



    $mobile = $country_code . $mobile;
    //dd($mobile);
    //dd($mobile);

    // $user = User::create([
    //     'name' => $name,
    //     'email' => $email1,
    //     'mobile' => "017",
    //     'referral_code' => $refer,
    //     'account_id' => $accountId,
    //     'password' => $password,
    // ]);
   //dd($name);
   // dd($mobile);
    $user=new User();
    $user->name=$name;
    $user->email=$email1;
    $user->mobile=$mobile;
    $user->referral_code=$refer;
    $user->account_id=$accountId;
    $user->password=$password;
    $user->save();
    


    $wallet=new wallet();
    $wallet->user_id = $user->id;
    $wallet->account_id=$accountId;
    $wallet->main_balance=0.0;
    $wallet->bonus=0.0;
    $wallet->refer=0.0;
    $wallet->gift=0.0;
    $wallet->cash_back=0.0;
    $wallet->save();
    
    

    $emailotp->delete();


    $request->session()->forget('register_email');
    $request->session()->forget('register_name');
   $request->session()->forget('register_password');
   $request->session()->forget('register_country_code');
   $request->session()->forget('register_mobile_number');
    $request->session()->forget('register_refer');

    Auth::login($user);

    return redirect('home');


}








}
