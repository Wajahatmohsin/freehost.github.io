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
                                    <h4 class="card-title">Blog All</h4>
                                  

                                       <table class="table caption-top">
                                          
                                            <thead>
                                                <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Blog Category</th>
                                                <th scope="col">Blog Title</th>
                                                <th scope="col">Blog Tags</th>
                                                <th scope="col">Blog Image</th>
                                                <th scope="col">Action</th>
                                          
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php ($i = 1)
                                                @foreach($blogs as $item)
                                                <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item['blogcat']['blog_category'] }}</td>
                                                <td>{{ $item->blog_title }}</td>
                                                <td>{{ $item->blog_tags }}</td>
                                               <td> <img src="{{ asset($item->blog_img) }}" alt="" width="60" height="50"> </td>
                                                <td>
                                                    <a href="{{ route('edit.blog',$item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{ route('delete.blog',$item->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"> <i class="fas fa-trash"></i> </a>
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