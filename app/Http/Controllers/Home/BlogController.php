<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Image;

class BlogController extends Controller
{
    public function AllBlog(){

        $blogs = Blog::latest()->get();
        return view('admin.blogs.blogs_all',compact('blogs'));

    }//End Method

    public function AddBlog(){
    
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('admin.blogs.blogs_add',compact('categories'));

    }//End Method



    public function StoreBlog(Request $request){
        
        $image = $request->file('blog_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(430,327)->save('upload/blog_images/'.$name_gen);
        $save_url = 'upload/blog_images/'.$name_gen;
 
      Blog::insert([
        
        'blog_category_id' => $request->blog_category_id,
        'blog_title' => $request->blog_title,
        'blog_desc' => $request->blog_desc,
        'blog_tags' => $request->blog_tags,
        'blog_img' => $save_url,
        'created_at' => Carbon::now(),
 
      ]);
 
 
      $notifications = [
            
        'message' => 'Blog Inserted Successfully!',
        'alert-type' => 'success'
    
    ];
  
     return redirect()->route('all.blog')->with($notifications);
 
 

    }//End Method

    public function EditBlog($id){
          
      $blogs = Blog::find($id);
      $categories = BlogCategory::orderBy('blog_category','ASC')->get();
      return view('admin.blogs.blogs_edit',compact('blogs','categories'));

    }//End Method




public function UpdateBlog(Request $request) {

    $blog_id = $request->id;

    if ($request->file('blog_img')) {
        // Check if an image already exists
        $existingBlog = Blog::findOrFail($blog_id);
        $existingImage = $existingBlog->blog_img;

        if ($existingImage) {
            // Delete the existing image from the server
            if (file_exists(public_path($existingImage))) {
                @unlink(public_path($existingImage));
            }
        }

        $image = $request->file('blog_img');
    
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(430, 327)->save('upload/blog_images/' . $name_gen);
        $save_url = 'upload/blog_images/' . $name_gen;

        Blog::findOrFail($blog_id)->update([
            'blog_category_id' => $request->blog_category_id,
            'blog_title' => $request->blog_title,
            'blog_desc' => $request->blog_desc,
            'blog_tags' => $request->blog_tags,
            'blog_img' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notifications = [
            'message' => 'Portfolio Updated with Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.blog')->with($notifications);
    } 
    else {

        Blog::findOrFail($blog_id)->update([
          'blog_category_id' => $request->blog_category_id,
          'blog_title' => $request->blog_title,
          'blog_desc' => $request->blog_desc,
          'blog_tags' => $request->blog_tags,
        ]);
            
      

        $notifications = [
            'message' => 'Blog Updated without Image Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.blog')->with($notifications);
    }////End else
  
  }///End Method




  
public function DeleteBlog($id){

  $blog_id = Blog::findOrfail($id);
  $image = $blog_id->blog_img;
  unlink($image);
  
  Blog::findOrfail($id)->delete();
  

  
  $notifications = [
            
      'message' => 'Portfolio Image Deleted Successfully!',
      'alert-type' => 'success'
  
  ];
  
  return redirect()->back()->with($notifications);
  
  }//End Method


  public function BlogDetails($id){
  $allblogs = Blog::latest()->limit(5)->get();
  $blogs = Blog::findOrfail($id);
  $categories = BlogCategory::orderBy('blog_category','ASC')->get();
  return view('frontend.blog_details',compact('blogs','allblogs','categories'));
    

  }//End Method



  public function CategoryBlog($id){
    $allblogs = Blog::latest()->limit(5)->get();
    $blogpost = Blog::where('blog_category_id',$id)->orderBy('id', 'DESC')->get();
    $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $categoryname = BlogCategory::findOrfail($id);
    return view('frontend.category_blog_details',compact('blogpost','allblogs','categories','categoryname'));

    

  }//End Method


  public function HomeBlog(){
    
    $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $allblog = Blog::latest()->paginate(2);
    return view('frontend.blog',compact('allblog','categories'));


  }//End Method
  


   
}
