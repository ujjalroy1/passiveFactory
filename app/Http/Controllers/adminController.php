<?php

namespace App\Http\Controllers;

use App\Models\Captcha;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function admin_home()
    {

        return view('admin.index');
    }
    public function add_captcha()
    {

        return view('admin.add_captcha');
    }
    public function upload_captcha(Request $request)
    {
        $data=new Captcha;
        $data->title=$request->title;
        $data->code=$request->captcha;
        $data->price=$request->price;
        
        $img=$request->image;
        if($img)
        {
           $imgname=time().'.'.$img->getClientOriginalExtension();
           $request->image->move('captcha_photo',$imgname);
           $data->image=$imgname;
        }
        $data->save();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Captcha added successfully.');

        return redirect()->back();

    }
}
