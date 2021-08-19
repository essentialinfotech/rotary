<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class FrontController extends Controller
{
    public function index()
    {


       $sliders = SLider::get();
    	return view('front.index',compact('sliders'));
    }
}
