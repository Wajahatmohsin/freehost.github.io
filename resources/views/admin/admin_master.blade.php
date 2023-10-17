<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Drezoc - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Dropify css -->
    <link href="{{ asset('backend/assets/plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toaster Notifications !-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
   


    <!-- Plugins css -->
    <link href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />




  

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Left Sidebar Start ========== -->
     @include('admin.body.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

          @include('admin.body.header')

            @yield('admin')
            <!-- End Page-content -->

            @include('admin.body.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
    <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>

    <!-- Sparkline Js-->
    <script src="{{ asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Morris Js-->
    <script src="{{ asset('backend/assets/plugins/morris-js/morris.min.js') }}"></script>
    <!-- Raphael Js-->
    <script src="{{ asset('backend/assets/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('backend/assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/theme.js') }}"></script>


    <script src="{{ asset('backend/assets/plugins/dropify/dropify.min.js') }}"></script>

    <!-- Init js-->
      <script src="{{ asset('backend/assets/pages/fileuploads-demo.js') }}"></script>

    <!--ckEditor5!-->
      <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


      <script>
      ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
      console.log( editor );
      } )
      .catch( error => {
      console.error( error );
      } );
      </script>
     
    

        <!-- third party js -->
        <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

      <!-- Datatables init -->
      <script src="{{ asset('backend/assets/pages/datatables-demo.js') }}"></script>

   <!-- Plugins js -->
   <script src="{{ asset('backend/assets/plugins/autonumeric/autoNumeric-min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>


        <!-- Custom Js -->
         <script src="{{ asset('backend/assets/pages/advanced-plugins-demo.js') }}"></script>

      <!--Sweet Alert2 !-->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Tags input Js -->
       <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>

   <!--Toaster Js !-->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
 
   <!--Validation Js !-->
   <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>


          <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch(type){
          case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;

          case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;

          case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;

          case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break; 
      }
      @endif 



      
$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  }) 


    });

  });










</script>

</body>

</html>