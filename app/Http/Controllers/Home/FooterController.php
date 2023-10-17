<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function FooterSetup(){
        
      $allfooter = Footer::find(1);

      return view('admin.footer.footer_all',compact('allfooter'));

    }//End Method




    public function UpdateFooter(Request $request){
      

       $footer_id = $request->id;

        Footer::findOrfail($footer_id)->update([

            'number' => $request->number,
            'short_desc' => $request->short_desc,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
       
        
        ]);


        $notifications = [
               
            'message' => 'Footer Page Updated with Successfully!',
            'alert-type' => 'success'
        
        ];
      
         return redirect()->back()->with($notifications);
        

    }//End Method




}
