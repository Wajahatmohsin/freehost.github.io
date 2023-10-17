<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function AdminLogout(Request $request)
   
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notifications = [
            
            'message' => 'User Logout Successfully!',
            'alert-type' => 'success'
        
        ];
      
         return redirect()->route('login')->with($notifications);

 }//End Method



    public function AdminProfile(){
        
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));


    }//End Method


    public function EditProfile(){
        
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_edit_profile',compact('editData'));

    }//End Method


    public function StoreProfile(Request $request){
         
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->phone = $request->phone;
        
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
        
            // Check if the old profile image file exists before attempting to delete it
            $oldImagePath = public_path('upload/admin_images/' . $data->profile_image);
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
        
            $data->profile_image = $filename;
        }
        
        $data->save();

        $notifications = [
            
            'message' => 'Profile Image Updated Successfully!',
            'alert-type' => 'success'
        
        ];
      
        
        return redirect()->route('admin.profile')->with($notifications);
        
 

         
   

    }//End Method


    public function ChangePassword(){
        
        return view('admin.admin_change_password');

    }//End Method


    public function UpdatePassword(Request $request){
        
        $validateData = $request->validate([
            
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password Updated Successfully!');
            return redirect()->back();
        }
        else{
            session()->flash('message', 'Old Password is not Matched!');
            return redirect()->back();
        }
        

    }//End Method
}
