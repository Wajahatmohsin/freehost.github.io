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
                                    <h4 class="card-title">Portfolio All Data</h4>
                                  

                                       <table class="table caption-top">
                                          
                                            <thead>
                                                <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                          
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php ($i = 1)
                                                @foreach($portfolio as $item)
                                                <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->portfolio_name }}</td>
                                                <td>{{ $item->portfolio_title }}</td>
                                               <td> <img src="{{ asset($item->portfolio_image) }}" alt="" width="60" height="50"> </td>
                                                <td>
                                                    <a href="{{ route('edit.portfolio',$item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{ route('delete.portfolio',$item->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"> <i class="fas fa-trash"></i> </a>
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