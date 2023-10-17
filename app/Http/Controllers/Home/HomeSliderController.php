<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;

class HomeSliderController extends Controller
{
    public function HomeSlide(){

    $homeslide = HomeSlide::find(1);

    return view('admin.home_slide.home_slide_all',compact('homeslide'));

    }//End Method


    public function UpdateSlider(Request $request){
        
     $home_slide = $request->id;

     if($request->file('home_image')){

        $image = $request->file('home_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
        $save_url = 'upload/home_slide/'.$name_gen;

      HomeSlide::findorFail($home_slide)->update([
        
        'title' => $request->title,
        'short_title' => $request->short_title,
        'video_url' => $request->video_url,
        'home_image' => $save_url,


      ]);


      $notifications = [
            
        'message' => 'Image Updated with Successfully!',
        'alert-type' => 'success'
    
    ];
  
     return redirect()->back()->with($notifications);



    }

    else{
      
      HomeSlide::findorFail($home_slide)->update([

      'title' => $request->title,
      'short_title' => $request->short_title,
      'video_url' => $request->video_url,
   


    ]);

    
    $notifications = [
            
      'message' => 'Image Updated without Successfully!',
      'alert-type' => 'success'
  
  ];

   return redirect()->back()->with($notifications);



    }
      
        



  }//End Method




}
