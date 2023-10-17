@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">

   <h4 class="card-title">Portfolio Page</h4>
  
    
    <form method="POST"  action="{{ route('update.portfolio') }}" class="form-horizontal" enctype="multipart/form-data">
 
        @csrf
      <input type="hidden" name="id" value="{{ $allportfolio->id }}">
 
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Portfolio Name</label>
            <div class="col-9">
                <input type="text" name="portfolio_name" class="form-control" id="title" placeholder="Portfolio Name" value="{{ $allportfolio->portfolio_name }}">
                @error('portfolio_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Portfolio Title</label>
            <div class="col-9">
                <input type="text" name="portfolio_title" class="form-control" id="portfolio_title" placeholder="Portfolio Title" value="{{ $allportfolio->portfolio_title }}">
                @error('portfolio_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

      

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Portfolio Description</label>
            <div class="col-9">
            <textarea class="form-control" name="portfolio_description" id="editor">{!! $allportfolio->portfolio_description !!}</textarea>
            </div>
        </div>   


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Portfolio Image</label>
            <div class="col-9">
            <input type="file" name="portfolio_image" id="image" class="dropify" data-default-file="{{ asset($allportfolio->portfolio_image)  }}"/><br>
            <img id="showImage" src="{{ asset($allportfolio->portfolio_image) }}" alt="image" class="img-fluid img-thumbnail" width="100">
            @error('portfolio_image')
                    <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
        </div>
    
    

       

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Insert Portfolio Data</button>
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