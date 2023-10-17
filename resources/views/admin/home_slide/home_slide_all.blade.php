@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  
    
    <form method="post" action="{{ route('update.slider') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
       <input type="hidden" name="id" value="{{ $homeslide->id }}">
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
            <div class="col-9">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $homeslide->title }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Short Title</label>
            <div class="col-9">
                <input type="text" name="short_title" class="form-control" id="short_title" placeholder="Email" value="{{ $homeslide->short_title }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Video Url</label>
            <div class="col-9">
                <input type="text" class="form-control" name="video_url" id="video_url" placeholder="video url" value="{{ $homeslide->video_url }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Home Image</label>
            <div class="col-9">
            <input type="file" name="home_image" id="image" class="dropify" data-default-file="{{ asset(!empty($homeslide->home_image) ? url($homeslide->home_image) : url('upload/no_image.jpg'))  }}"/><br>
            <img id="showImage" src="{{ asset(!empty($homeslide->home_image) ? url($homeslide->home_image) : url('upload/no_image.jpg')) }}" alt="image" class="img-fluid img-thumbnail" width="100">
            </div>
        </div>

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update Slide</button>
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


@endsection