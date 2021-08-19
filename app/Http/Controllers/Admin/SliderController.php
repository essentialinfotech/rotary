<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Slider;

class SliderController extends Controller
{
     public function index()
    {

      $sliders = Slider::get();
      return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
      return view('admin.slider.create');
    }

    public function insert(Request $request)
    {
      $slider = new Slider();
      $slider->title = $request->title;
      $slider->description = $request->description;
      if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/sliders/'.$filename;

        Image::make($image_tmp)->resize(1326,820)->save($large_image_path);
           $slider->image =$filename;

        }
        }
        $slider->save();
          return redirect()->route('admin.slider.index')->with('flash_message_success','Slider has added successfully');
    }

    public function updateStatus($id, $status)
      {

          $slider = Slider::find($id);
          $slider->status = $status;
          if ($slider->save()){
              echo "1";
          }else{
              echo "0";
          }

      }
    public function update(Request $request,$id)
    {
      if ($request->isMethod('post')) {
        $data = $request->all();
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        if ($request->hasFile('image')) {
          $image_tmp = $request->file('image');
          if ($image_tmp->isValid()) {
          $extension = $image_tmp->getClientOriginalExtension();
          $filename=rand(111,99999).'.'.$extension;
          $large_image_path = 'images/backend_images/sliders/'.$filename;

          Image::make($image_tmp)->resize(1326,820)->save($large_image_path);
             $slider->image =$filename;

          }
          }
          $slider->save();
          return redirect()->route('admin.slider.index')->with('flash_message_success','Slider has update successfully');
      }

      $slider = Slider::where('id',$id)->first();
      return view('admin.slider.edit',compact('slider'));
    }

    public function delete($id)
    {
      $slider = Slider::find($id);
    if (!is_null($slider)) {
      if (File::exists(public_path('images/backend_images/sliders/').$slider->image)) {
        File::delete(public_path('images/backend_images/sliders/').$slider->image);
      }
    }
    $slider->delete();
    return back()->with('flash_message_success','Slider has delete successfully');
    }
}
