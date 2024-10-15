<?php

namespace App\Http\Controllers;

use App\Models\boughtPackage;
use App\Models\Captcha;
use App\Models\Package;
use App\Models\team;
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
        if(count($captcha)==0)
        {
             return view('user.error_handel_page',compact('captcha','account_id','user','wallet'));
        }
        else
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
 
    public function package()
    {
        $user=Auth::user();
        $account_id=$user->account_id;
        $wallet = Wallet::where('account_id', $account_id)->first();

        $captcha=Captcha::all();
        $package=Package::all();

         return view('user.package',compact('captcha','account_id','user','wallet','package'));

    }
    public function buy_package(Request $request,$id)
    {

         $data=package::find($id);
         $user=Auth::user();
         $account_id=$user->account_id;
         $wallet = Wallet::where('account_id', $account_id)->first();
         return view('user.buy_method',compact('data','user','account_id','wallet'));

    }

    public function buy_next(Request $request, $id)
    {
 
        //   dd($request);
        $data=package::find($id);
        $user=Auth::user();
        $account_id=$user->account_id;
        $wallet = Wallet::where('account_id', $account_id)->first();
        if($request->paymentMethod==='account')
        {

              if(((double)$wallet->main_balance - (double)$data->price)<0.0)
              {

                toastr()->timeOut(5000)->closeButton()->addError('Not sufficient balance to make the purchase.');

                  return redirect('/package');
              }
              else
            return view('user.confirm_buy_package',compact('data','user','account_id','wallet'));
        }
        else
        {
            toastr()->timeOut(5000)->closeButton()->addError('Sorry we are currently working on it please try another way.');

             
            return redirect('package');
        }

    }
    //this is by pressing confirm button
   public function success_buy($id)
   {
  
     $us=Auth::user();
     $account_id=$us->account_id;
     $wallet = Wallet::where('account_id', $account_id)->first();
     $data=package::find($id);
     
     $wallet->main_balance=((double)$wallet->main_balance - (double)$data->price);
     $wallet->save();

     //create a new package
     $bp=new boughtPackage();
     $bp->user_id=$us->id;
     $bp->account_id=$us->account_id;
     $bp->type=$data->name;
     $bp->price=$data->price;
     $bp->duration='90';
     $bp->save();
    toastr()->timeOut(5000)->closeButton()->addSuccess('You have successfully purchased '.$data->name.' package.');
    
    return redirect('package');
   }

   //bought package handeling
   public function show_boughtPackage()
   {
      
       $user=Auth::user();
       if($user)
       {
        $account_id=$user->account_id;
        $wallet = Wallet::where('account_id', $account_id)->first();

        
        $data=boughtPackage::where('account_id',$account_id)->get();
       }
       else
       {

         return redirect()->back();
       }

       return view('user.show_bought_package',compact('data','wallet','account_id','user'));


   }

   //this is for main page of team
   public function my_team()
   {

    $user=Auth::user();
    $account_id=$user->account_id;
    $wallet = Wallet::where('account_id', $account_id)->first();
    $level1=team::where('parent',$account_id)->pluck('child');
    $level2=team::whereIn('parent',$level1)->pluck('child');
    $level3=team::whereIn('parent',$level2)->pluck('child');
    return view('user.my_team',compact('user','account_id','wallet','level1','level2','level3'));

   }

   //this is for different level team
   public function myTeamInfo($id)
   {

    $user=Auth::user();
    $account_id=$user->account_id;
    $wallet = Wallet::where('account_id', $account_id)->first();
    $level1=team::where('parent',$account_id)->pluck('child');
    $level2=team::whereIn('parent',$level1)->pluck('child');
    $level3=team::whereIn('parent',$level2)->pluck('child');
        
    return view('user.my_team_info',compact('user','account_id','wallet','level1','level2','level3','id'));

   }


   //this is for see details of my team member
   public function my_team_details(Request $request,$id)
   {

    $user=Auth::user();
    $account_id=$user->account_id;
    $wallet = Wallet::where('account_id', $account_id)->first();
    $package=boughtPackage::where('account_id',$id)->get();
    return view('user.my_team_details',compact('user','account_id','wallet','package'));

   }





}
