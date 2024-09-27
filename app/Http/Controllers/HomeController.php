<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('user.index');
    }
    public function home()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $account_id=$user->account_id;
        }
      
        return view('user.index',compact('account_id'));
    }
}
