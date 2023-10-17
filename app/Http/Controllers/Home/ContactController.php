<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function Contact(){

     return view('frontend.contact');

    }//End Method


    public function StoreMessage(Request $request){

       Contact::insert([
        
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'phone' => $request->phone,
        'message' => $request->message,
        'created_at' => Carbon::now(),

       ]);

       $notifications = [
               
        'message' => 'Your Message Submitted Successfully!',
        'alert-type' => 'success'
    
    ];
  
     return redirect()->back()->with($notifications);

    }//End Method



    public function ContactMessage(){
        
        $contacts = Contact::latest()->get();
       return view('admin.contact.allcontact',compact('contacts'));

    }//End Method



    public function DeleteMessage($id){
       
    

        Contact::findOrfail($id)->delete();


        $notifications = [
               
            'message' => 'Your Message Deleted Successfully!',
            'alert-type' => 'success'
        
        ];
      
         return redirect()->back()->with($notifications);

    }//End Method
}
