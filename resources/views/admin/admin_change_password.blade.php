@extends('admin.admin_master')
@section('admin')




<div class="page-content">
<div class="container-fluid">


<div class="card">
<div class="card-body">


  <h4 class="card-title">Change Password Page</h4><br><br>
       
  @if(count($errors))
        @foreach($errors->all() as $error)
          <p class="alert alert-danger alert-dismissible fade show" >{{ $error }}</p>
        @endforeach



  @endif

    
    <form method="post" action="{{ route('update.password') }}" class="form-horizontal">
        @csrf
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Old Password</label>
            <div class="col-9">
                <input type="password" name="oldpassword" class="form-control" id="oldpassword" placeholder="Password" value="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">New Password</label>
            <div class="col-9">
                <input type="password" name="newpassword" class="form-control" id="newpassword" placeholder="Password" value="">
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-3 col-form-label">Confirm Password</label>
            <div class="col-9">
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password" value="">
            </div>
        </div>


        
  <div class="form-group mb-0 justify-content-end row">
            <div class="col-9">
                <button type="submit" class="btn btn-info">Change Password</button>
            </div>
        </div>
    </form>
</div> <!-- end card-body-->
</div>   
           


                  


</div>
</div>




@endsection