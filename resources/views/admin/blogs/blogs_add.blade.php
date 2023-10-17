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

   <h4 class="card-title">Add Blog</h4>
  
    
    <form method="post" action="{{ route('store.blog') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
       
    
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Category Name</label>
            <div class="col-9">
            <div class="form-group">
                        <label for="exampleFormControlSelect1">Select</label>
                        <select name="blog_category_id" class="form-control" id="exampleFormControlSelect1">
                            <option value="selected">Select Options</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->blog_category }}</option>
                          @endforeach
                        </select>
                    </div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Title</label>
            <div class="col-9">
                <input type="text" name="blog_title" class="form-control" id="blog_title">
                @error('blog_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Tags</label>
            <div class="col-9">
            <input type="text" name="blog_tags" value="home,tech" class="form-control" data-role="tagsinput">
              
            </div>
        </div>

      

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Description</label>
            <div class="col-9">
            <textarea class="form-control" name="blog_desc" id="editor"></textarea>
            </div>
        </div>   


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Image</label>
            <div class="col-9">
            <input type="file" name="blog_img" id="image" class="dropify" data-default-file="{{ url('upload/no_image.jpg')  }}"/><br>
            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="image" class="img-fluid img-thumbnail" width="100">
            @error('portfolio_image')
                    <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
        </div>
    
    

       

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Insert Blog Data</button>
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