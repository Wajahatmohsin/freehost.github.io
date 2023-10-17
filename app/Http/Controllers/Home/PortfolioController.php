<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Carbon\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio(){
        
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all',compact('portfolio'));

    }//End Method


    public function AddPortfolio(){
        
        return view('admin.portfolio.portfolio_add');

    }//End Method


    public function StorePortfolio(Request $request){
         
       $request->validate([
        
        'portfolio_name' => 'required',
        'portfolio_title' => 'required',
        'portfolio_image' => 'required',

       ],[

        'portfolio_name.required' => 'Portfolio Name is Required', 
        'portfolio_title.required' => 'Portfolio Title is Required',
        'portfolio_image.required' => 'Portfolio Image is Required',


       ]);



       $image = $request->file('portfolio_image');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
       $save_url = 'upload/portfolio/'.$name_gen;

     Portfolio::insert([
       
       'portfolio_name' => $request->portfolio_name,
       'portfolio_title' => $request->portfolio_title,
       'portfolio_description' => $request->portfolio_description,
       'portfolio_image' => $save_url,
       'created_at' => Carbon::now(),

     ]);


     $notifications = [
           
       'message' => 'Portfolio Inserted Successfully!',
       'alert-type' => 'success'
   
   ];
 
    return redirect()->route('all.portfolio')->with($notifications);


}//End Method


public function EditPortfolio($id){
    
    $allportfolio = Portfolio::findOrfail($id);
    return view('admin.portfolio.portfolio_edit',compact('allportfolio'));

}//End Method


public function UpdatePortfolio(Request $request){
   
  
   
    $portfolio_id = $request->id;

    if($request->file('portfolio_image')){

       $image = $request->file('portfolio_image');
       @unlink(public_path('upload/portfolio/'.$portfolio_id->portfolio_image));
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
       $save_url = 'upload/portfolio/'.$name_gen;

      Portfolio::findOrfail($portfolio_id)->update([
        
       'portfolio_name' => $request->portfolio_name,
       'portfolio_title' => $request->portfolio_title,
       'portfolio_description' => $request->portfolio_description,
       'portfolio_image' => $save_url,
       ]);

   
     $notifications = [
           
       'message' => 'Portfolio Updated with Successfully!',
       'alert-type' => 'success'
   
   ];
 
    return redirect()->route('all.portfolio')->with($notifications);
 }


   else{
      
    Portfolio::findorFail($portfolio_id)->update([

    'portfolio_name' => $request->portfolio_name,
    'portfolio_title' => $request->portfolio_title,
    'portfolio_description' => $request->portfolio_description,



  ]);

  
  $notifications = [
          
    'message' => 'Portfolio Updated without Image Successfully!',
    'alert-type' => 'success'

];

return redirect()->route('all.portfolio')->with($notifications);

}

}//End Method


public function DeletePortfolio($id){

$portfolio_id = Portfolio::findOrfail($id);
$image = $portfolio_id->portfolio_image;
unlink($image);

Portfolio::findOrfail($id)->delete();

$notifications = [
          
    'message' => 'Portfolio Image Deleted Successfully!',
    'alert-type' => 'success'

];

return redirect()->back()->with($notifications);

}//End Method



public function PortfolioDetails($id){

  $portfolio = Portfolio::findOrfail($id);
  return view('frontend.portfolio_details',compact('portfolio'));

}//End Method


public function HomePortfolio(){
  
  $portfolio = Portfolio::latest()->get();
   
  return view('frontend.portfolio',compact('portfolio'));

}//End Method








}
