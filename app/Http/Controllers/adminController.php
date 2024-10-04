<?php

namespace App\Http\Controllers;

use App\Models\Captcha;
use App\Models\Package;
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
   public function add_package()
   {
        return view('admin.add_package');
   }
  public function upload_package(Request $request)
  {

       $data=new Package;
       $data->name=$request->name;
       $data->price=$request->price;
       $data->benifit=$request->benifit;
       $data->save();
       toastr()->timeOut(5000)->closeButton()->addSuccess('package added successfully.');

      return redirect()->back();

  }




}
