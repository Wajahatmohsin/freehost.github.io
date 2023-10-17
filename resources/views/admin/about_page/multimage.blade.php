@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  
    
    <form method="post" action="{{ route('store.multi.image') }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf

     
       
      

     <h4 class="card-title">Add Multi Image</h4><br><br>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">About Multi Image</label>
            <div class="col-9">
            <input type="file" name="multi_image[]" multiple="" id="image" class="dropify" data-default-file="{{ asset(!empty($aboutpage->about_img) ? url($aboutpage->about_img) : url('upload/no_image.jpg'))  }}"/><br>
            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="image" class="img-fluid img-thumbnail" width="100">
            </div>
        </div>

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Add Multi Image</button>
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