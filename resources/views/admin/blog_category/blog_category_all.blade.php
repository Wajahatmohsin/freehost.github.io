@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">

<div class="page-content pt-4">
                <div class="container-fluid">

                     <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">BlogCategory All</h4>
                                  

                                       <table class="table caption-top">
                                          
                                            <thead>
                                                <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Blog Category Name</th>
                                                
                                                <th scope="col">Action</th>
                                          
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- @php ($i = 1) -->
                                                @foreach($allblog as $key => $item)
                                                <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->blog_category }}</td>
                                           
                                       
                                                <td>
                                                    <a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{ route('delete.blog.category',$item->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                           
                                                </tr>
                                                @endforeach
                                         
                                            </tbody>
                                            </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container-fluid -->
            </div>








</div>
</div>

@endsection