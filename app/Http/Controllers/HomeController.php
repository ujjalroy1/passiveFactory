<?php

namespace App\Http\Controllers;

use App\Models\Captcha;
use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $account_id=$user->account_id;
        }
        else $account_id='';
        return view('user.index',compact('account_id'));

        return view('user.index');
    }
    public function home()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $account_id=$user->account_id;
        }
        else $account_id='';
        return view('user.index',compact('account_id'));
    }
    public function captcha()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $account_id=$user->account_id;
        }
        else $account_id='';

        $captcha=Captcha::all();
        return view('user.captcha',compact('captcha','account_id'));
    }
    public function store_captcha_point(Request $request)
    {
        // dd($request->user_input_captcha);
      
        $user=Auth::user();
        $account_id=$user->account_id;
        $data=wallet::where('account_id',$account_id)->first();
        if($data&&($request->user_input_captcha==$request->code))
        {
            toastr()->timeOut(5000)->closeButton()->addSuccess('Your Captcha submit successfully');
            $data->main_balance+=floatval($request->price);
            $data->save();
        }
        else
        {
            toastr()->timeOut(5000)->closeButton()->addWarning('Your Captcha is not correct or your wallet is not connect');

        }
         

        return redirect()->back();
    }
}
