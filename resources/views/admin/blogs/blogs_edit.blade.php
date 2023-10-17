@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>


<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">

   <h4 class="card-title">Edit Blog Page</h4>
  
    
    <form method="post" action="{{ route('update.blog') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
       
    <input type="hidden" name="id" value="{{ $blogs->id }}">
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Category Name</label>
            <div class="col-9">
            <div class="form-group">
                        <label for="exampleFormControlSelect1">Select</label>
                        <select name="blog_category_id" class="form-control" id="exampleFormControlSelect1">
                            <option value="selected">Select Options</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $blogs->blog_category_id ? 'selected' : '' }}> {{ $cat->blog_category }}</option>
                          @endforeach
                        </select>
                    </div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Title</label>
            <div class="col-9">
                <input type="text" name="blog_title" class="form-control" id="blog_title" value="{{ $blogs->blog_title }}">
             
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Tags</label>
            <div class="col-9">
            <input type="text" name="blog_tags" value="{{ $blogs->blog_tags }}" class="form-control" data-role="tagsinput" >
              
            </div>
        </div>

      

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Description</label>
            <div class="col-9">
            <textarea class="form-control" name="blog_desc" id="editor">{{ $blogs->blog_desc }}</textarea>
            </div>
        </div>   


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Image</label>
            <div class="col-9">
            <input type="file" name="blog_img" id="image" class="dropify" data-default-file="{{ asset($blogs->blog_img)  }}"/><br>
            <img id="showImage" src="{{ asset($blogs->blog_img)  }}" alt="image" class="img-fluid img-thumbnail" width="100">
        
            </div>
        </div>
    
    

       

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update Blog Data</button>
            </div>
        </div>
    </form>
</div> <!-- end card-body-->
</div>   
           


                  


</div>
</div>


<script  type="text/javascript">
      
     
      $(document).ready(function(){
        
        $('#image').change(function(e){
            
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);

        });

      });

</script>



<script src="path/to/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "#snow-editor", // Make sure this selector matches the ID of your textarea
        // Other configuration options here
    });
</script>



@endsection