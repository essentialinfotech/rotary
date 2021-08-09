<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
       if($request->isMethod('post')){
           $data=$request->all();
           $validateDate=$request->validate([
               'email'=>['required','email','max:255'],
               'password'=>['required'],
           ]);

           if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
               return redirect()->route('admin.dashboard')->with('flash_message_success','Login Successfully');
           }else{
               return redirect()->back()->with('flash_message_error','Invaild email or password');
           }
       }

      
    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }

    public function updatePasswordForm()
    {
       return view('admin.update_password');
    }

    public function organization()
    {
        return view('front.organization');
    }

    public function rlifiles()
    {
        return view('front.rlifiles');
    }
}
