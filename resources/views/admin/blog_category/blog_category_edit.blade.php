@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">

   <h4 class="card-title">Edit Blog Category Page</h4><br><br>
  
    
    <form method="post" action="{{ route('update.blog.category',$all_blog->id ) }}" class="form-horizontal">
        @csrf
       
       
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Category Name</label>
            <div class="col-9">
                <input type="text" name="blog_category" class="form-control" id="blog_category" value="{{ $all_blog->blog_category }}">
                @error('blog_category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

      

    
   
    

       

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update Blog Category</button>
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