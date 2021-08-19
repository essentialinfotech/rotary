<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Session;
class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function login(Request $request)
    {

    	 if ($request->isMethod('post')) {
			    $data = $request->all();
			    $validatedData = $request->validate([
			    'email' => ['required', 'email', 'max:255'],
			    'password' => ['required'],
			]);
    // echo "<pre>";print_r($data);die();
		if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])) {
		   Session::put('adminSession',$data['email']);

		return redirect('admin/dashboard')->with('flash_message_success','Login Successfully !');
		}else {
		  return redirect()->back()->with('flash_message_error','Invalid Email or Password');
		}
	}
   return view('admin.login');
    }
}
