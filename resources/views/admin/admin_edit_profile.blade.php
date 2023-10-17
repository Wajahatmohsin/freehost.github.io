@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  
    
    <form method="post" action="{{ route('store.profile') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Name</label>
            <div class="col-9">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $editData->name }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Email</label>
            <div class="col-9">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ $editData->email }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Username</label>
            <div class="col-9">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ $editData->username }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Phone</label>
            <div class="col-9">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{ $editData->phone }}">
            </div>
        </div>
      
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Image</label>
            <div class="col-9">
            <input type="file" name="profile_image" id="image" class="dropify" data-default-file="{{ asset(!empty($editData->profile_image) ? url('upload/admin_images/'.$editData->profile_image) : url('upload/no_image.jpg'))  }}"  />
            <img id="showImage" src="{{ asset(!empty($editData->profile_image) ? url('upload/admin_images/'.$editData->profile_image) : url('upload/no_image.jpg')) }}" alt="image" class="img-fluid img-thumbnail" width="200">
            </div>
        </div>

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update Profile</button>
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