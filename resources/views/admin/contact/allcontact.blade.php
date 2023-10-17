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
                                    <h4 class="card-title">Contact Message All</h4>
                                  

                                       <table class="table caption-top">
                                            <caption>List of users</caption>
                                            <thead>
                                                <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                          
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php ($i = 1)
                                                @foreach($contacts as $item)
                                                <tr>
                                                <td>{{ $i++ }}</td>
                                               <td> {{ $item->name }} </td>
                                               <td> {{ $item->email }} </td>
                                               <td> {{ $item->phone }} </td>
                                               <td> {{ $item->subject }} </td>
                                               <td> {{ $item->message }} </td>
                                               <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </td>
                                                <td>
                                                 
                                                    <a href="{{ route('delete.message',$item->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"> <i class="fas fa-trash"></i> </a>
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