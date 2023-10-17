@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  
    
    <form method="post" action="{{ route('update.about') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
       <input type="hidden" name="id" value="{{ $aboutpage->id }}">
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
            <div class="col-9">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $aboutpage->title }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Short Title</label>
            <div class="col-9">
                <input type="text" name="short_title" class="form-control" id="short_title" placeholder="Email" value="{{ $aboutpage->short_title }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Short Description</label>
            <div class="col-9">
            <textarea class="form-control" name="short_desc" id="exampleFormControlTextarea1" rows="3">{{ $aboutpage->short_desc }}</textarea>
            </div>
        </div>    


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Long Description</label>
            <div class="col-9">
            <textarea class="form-control" name="long_desc" id="editor" rows="3">{{ $aboutpage->long_desc }}</textarea>
            </div>
        </div>   
    
    

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">About Image</label>
            <div class="col-9">
            <input type="file" name="about_img" id="image" class="dropify" data-default-file="{{ asset(!empty($aboutpage->about_img) ? url($aboutpage->about_img) : url('upload/no_image.jpg'))  }}"/><br>
            <img id="showImage" src="{{ asset(!empty($aboutpage->about_img) ? url($aboutpage->about_img) : url('upload/no_image.jpg')) }}" alt="image" class="img-fluid img-thumbnail" width="100">
            </div>
        </div>

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update About</button>
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