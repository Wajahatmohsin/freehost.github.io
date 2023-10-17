@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">

   <h4 class="card-title">Add Blog Category Page</h4><br><br>
  
    
    <form method="post" id="myForm" action="{{ route('store.blog.category') }}" class="form-horizontal">
        @csrf
  
       
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Blog Category Name</label>
            <div class="col-9 form-group">
                <input type="text" name="blog_category" class="form-control" id="example-text-input">
          
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
       
       $(document).ready(function (){
        
        $('#myForm').validate({
         
            rules: {
                
                blog_category: {

                    required: true,
                },
                

            },
            messages : {
                blog_category: {
                    required: 'Please Enter Blog Category',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error,element){
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },

            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },



        });
        

       });
     
  

</script>






@endsection