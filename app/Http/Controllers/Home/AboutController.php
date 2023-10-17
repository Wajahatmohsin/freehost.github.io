<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Support\Carbon;
use Image;
use PhpParser\Parser\Multiple;


class AboutController extends Controller
{
    
    public function AboutPage(){


        $aboutpage = About::find(1);

        return view('admin.about_page.about_page_all',compact('aboutpage'));
        
    }////End Method



    public function UpdateAbout(Request $request){
        
        $about_id = $request->id;
   
        if($request->file('about_img')){
   
           $image = $request->file('about_img');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
           $save_url = 'upload/home_about/'.$name_gen;
   
         About::findorFail($about_id)->update([
           
           'title' => $request->title,
           'short_title' => $request->short_title,
           'short_desc' => $request->short_desc,
           'long_desc' => $request->long_desc,
           'about_img' => $save_url,
   
   
         ]);
   
   
         $notifications = [
               
           'message' => 'About Image Updated with Successfully!',
           'alert-type' => 'success'
       
       ];
     
        return redirect()->back()->with($notifications);
   
   
   
       }
   
       else{
         
         About::findorFail($about_id)->update([
   
            'title' => $request->title,
            'short_title' => $request->short_title,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
      
   
   
       ]);
   
       
       $notifications = [
               
         'message' => 'About Image Updated without Successfully!',
         'alert-type' => 'success'
     
     ];
   
      return redirect()->back()->with($notifications);
   
   
   
       }
         
   }//End Method



  
  
    public function HomeAbout(){
          
        $aboutpage = About::find(1);
        return view('frontend.about_page',compact('aboutpage'));

     }//End Method



     public function AboutMultiImage(){
      
      return view('admin.about_page.multimage');

     }//End Method




     public function StoreMultiImage(Request $request){

      $image = $request->file('multi_image');

       foreach ($image as $multi_img) {
        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(220,220)->save('upload/multi_images/'.$name_gen);
        $save_url = 'upload/multi_images/'.$name_gen;

      MultiImage::create([
        
   
        'multi_image' => $save_url,
        'created_at' => Carbon::now()


      ]);
    
    }///End of the Foreach

      $notifications = [
            
        'message' => 'Multi Images Inserted with Successfully!',
        'alert-type' => 'success'
    
    ];
  
    return redirect()->route('all.multi.image')->with($notifications);

   }//End Method




   
   
     public function AllMultiImage(){


      $allMultiImage = MultiImage::all();

      return view('admin.about_page.all_multiimage',compact('allMultiImage'));

     }//End Method




     public function EditMultiImage($id){
      
      $MultiImage = MultiImage::findOrfail($id);
      return view('admin.about_page.edit_multi_image',compact('MultiImage'));

     }//End Method



     public function UpdateMultiImage(Request $request){
      


      $multi_id = $request->id;
   
      if($request->file('multi_image')){
 
         $image = $request->file('multi_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
         Image::make($image)->resize(220,200)->save('upload/multi_images/'.$name_gen);
         $save_url = 'upload/multi_images/'.$name_gen;
 
       MultiImage::findorFail($multi_id)->update([
         
      
         'multi_image' => $save_url,
          'created_at' => Carbon::now(),
 
       ]);
 
 
       $notifications = [
             
         'message' => 'Multi Images Updated with Successfully!',
         'alert-type' => 'success'
     
     ];
   
      return redirect()->route('all.multi.image')->with($notifications);
 
     }
  }//End Method


  public function DeleteMultiImage($id){
    
     $multi_delete = MultiImage::findOrfail($id);
     $img = $multi_delete->multi_image;
     unlink($img);

     MultiImage::findOrfail($id)->delete();


     $notifications = [
             
      'message' => 'Multi Images Deleted with Successfully!',
      'alert-type' => 'success'
  
  ];

   return redirect()->back()->with($notifications);



  }//End Method
   


}
