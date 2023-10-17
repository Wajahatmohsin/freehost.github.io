@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">

    <div class="col-md-4">
        <div class="card"><br><br>
            <center>
        <img src="{{ asset(!empty($adminData->profile_image) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') )}}" alt="image" class="img-fluid img-thumbnail" width="200">
        </center>
            <div class="card-body">
                <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                <hr>
                <h4 class="card-title">Email: {{ $adminData->email }}</h4>
                <hr>
                <h4 class="card-title">User Name: {{ $adminData->username }}</h4>
                <hr>
                <h4 class="card-title">Phone: {{ $adminData->phone }}</h4>
                <hr>
                <a href="{{ route('edit.profile') }}" class="btn btn-primary">Edit Profile</a>
              
            </div>
        </div>
    </div>
    </div>
                  
                

                  


</div>
</div>


@endsection