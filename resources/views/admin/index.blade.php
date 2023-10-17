@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase font-size-12 text-muted mb-3">Cost per Unit</h6>
                        <span class="h3 mb-0"> $85.50 </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge badge-soft-success">+7.5%</span>
                    </div>
                </div> <!-- end row -->

                <div id="sparkline1" class="mt-3"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    
    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase font-size-12 text-muted mb-3">Market Revenue</h6>
                        <span class="h3 mb-0"> $12,548.25 </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge badge-soft-danger">-24.5%</span>
                    </div>
                </div> <!-- end row -->

                <div id="sparkline2" class="mt-3"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase font-size-12 text-muted mb-3">Expenses</h6>
                        <span class="h3 mb-0"> $8,451.28 </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge badge-soft-success">+3.5%</span>
                    </div>
                </div> <!-- end row -->

                <div id="sparkline3" class="mt-3"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase font-size-12 text-muted mb-3">Daily Visits</h6>
                        <span class="h3 mb-0"> 1,12,584 </span>
                    </div>
                    <div class="col-auto">
                        <span class="badge badge-soft-success">+53.5%</span>
                    </div>
                </div> <!-- end row -->

                <div id="sparkline4" class="mt-3"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->


<!-- end row-->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Recent Customers</h4>
                <p class="card-subtitle mb-4">Transaction period from 21 July to 25 Aug</p>
                
                <div class="table-responsive">
                    <table class="table table-centered table-striped table-nowrap">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Create Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                </td>
                                <td>
                                    937-330-1634
                                </td>
                                <td>
                                    pauljfrnd@jourrapide.com
                                </td>
                                <td>
                                    New York
                                </td>
                                <td>
                                    07/07/2018
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                </td>
                                <td>
                                    215-302-3376
                                </td>
                                <td>
                                    bryuellen@dayrep.com
                                </td>
                                <td>
                                    New York
                                </td>
                                <td>
                                    09/12/2018
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('backend/assets/images/users/avatar-8.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                </td>
                                <td>
                                    828-216-2190
                                </td>
                                <td>
                                    collier@jourrapide.com
                                </td>
                                <td>
                                    Canada
                                </td>
                                <td>
                                    06/30/2018
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                </td>
                                <td>
                                    (216) 75 612 706
                                </td>
                                <td>
                                    thykauper@rhyta.com
                                </td>
                                <td>
                                    Denmark
                                </td>
                                <td>
                                    09/08/2018
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('backend/assets/images/users/avatar-5.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                </td>
                                <td>
                                    (02) 75 150 655
                                </td>
                                <td>
                                    austin@dayrep.com
                                </td>
                                <td>
                                    Germany
                                </td>
                                <td>
                                    07/15/2018
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
    
   
</div>
<!-- end row-->

</div> <!-- container-fluid -->
</div>

@endsection