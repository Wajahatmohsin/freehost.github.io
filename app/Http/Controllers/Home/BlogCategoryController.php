<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Carbon\Carbon;

class BlogCategoryController extends Controller
{
    
    public function AllBlog(){
        
        $allblog = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all',compact('allblog'));

    }//End Method


    public function AddBlog(){
        
        return view('admin.blog_category.blog_category_add');

    }//End Method


    public function StoreBlogCategory(Request $request){
         
 
      BlogCategory::insert([
        
        'blog_category' => $request->blog_category,
      
 
      ]);
 
 
      $notifications = [
            
        'message' => 'Blog Category Inserted Successfully!',
        'alert-type' => 'success'
    
    ];
  
     return redirect()->route('all.blog.category')->with($notifications);

}


public function EditBlogCategory($id){
    
    $all_blog = BlogCategory::findOrfail($id);
    return view('admin.blog_category.blog_category_edit',compact('all_blog'));

}//End Method



public function UpdateBlogCategory(Request $request,$id){

 

    BlogCategory::findOrfail($id)->update([
        
        'blog_category' => $request->blog_category,

    ]);


     
    $notifications = [
            
        'message' => 'Blog Category Updated Successfully!',
        'alert-type' => 'success'
    
    ];
  
     return redirect()->route('all.blog.category')->with($notifications);


}


public function DeleteBlogCategory($id){

   BlogCategory::findOrfail($id)->delete();


   $notifications = [
            
    'message' => 'Blog Category Deleted Successfully!',
    'alert-type' => 'success'

];

 return redirect()->back()->with($notifications);

}

}
