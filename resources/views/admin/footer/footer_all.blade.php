@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  <h4 class="card-title">Footer Page</h4>
    
    <form method="post" action="{{ route('update.footer',$allfooter->id) }}" class="form-horizontal">
        @csrf
        
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Number</label>
            <div class="col-9">
                <input type="text" name="number" class="form-control" id="number" placeholder="Number" value="{{ $allfooter->number }}">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Short Description</label>
            <div class="col-9">
            <textarea class="form-control" name="short_desc" id="exampleFormControlTextarea1" rows="3">{{ $allfooter->short_desc }}</textarea>
            </div>
        </div>    
      
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Address</label>
            <div class="col-9">
                <input type="text" name="address" class="form-control" id="address" placeholder="Number" value="{{ $allfooter->address }}">
            </div>
        </div>
        

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Email</label>
            <div class="col-9">
                <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{ $allfooter->email }}">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Facebook</label>
            <div class="col-9">
                <input type="text" name="facebook" class="form-control" id="facebook" placeholder="" value="{{ $allfooter->facebook }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Twitter</label>
            <div class="col-9">
                <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Number" value="{{ $allfooter->twitter }}">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Copyright</label>
            <div class="col-9">
                <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Number" value="{{ $allfooter->copyright }}">
            </div>
        </div>

    

        

        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Update Footer Page</button>
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