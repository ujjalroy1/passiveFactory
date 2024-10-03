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
        $user=Auth::user();
        $account_id=$user->account_id;
        $wallet = Wallet::where('account_id', $account_id)->first();
            
           
        
      
        return view('user.index',compact('account_id','user','wallet'));
    }
    public function captcha()
    {
        $user=Auth::user();
        $account_id=$user->account_id;
        $wallet = Wallet::where('account_id', $account_id)->first();

        $captcha=Captcha::all();
        return view('user.captcha',compact('captcha','account_id','user','wallet'));
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
            toastr()->timeOut(5000)->closeButton()->addSuccess('Your Captcha is not correct or your wallet is not connect');

        }
         

        return redirect()->back();
    }
    public function user_profile()
    {
        $user=Auth::user();
        return view('user.setting',compact('user'));
    }
    public function update_profile(Request $request)
    {
            // Validate the request data
            $request->validate([
                     'name' => 'required|string|max:255',
                      'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
                           ]);

                 // Fetch authenticated user
                 $user = Auth::user();

                  // Update user's name and email
                 $user->name = $request->name;
                 $user->email = $request->email;

                // Save the changes
            
                    $user->save();
                 
                   
 
                    
                   toastr()->timeOut(5000)->closeButton()->addSuccess('Your Profile updated successfully.');


               return redirect()->back();
          
    }
}
