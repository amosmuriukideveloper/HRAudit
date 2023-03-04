<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

      <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body class="authentication-bg bg-gradient">

        <div class="account-pages mt-5 pt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                         {{ $slot }}


            </div>
        </div>
            </div>
        </div>
    </body>

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>



     <!-- Responsive examples -->
     <script src="{{asset('libs/datatables/dataTables.responsive.min.js') }}"></script>
     <script src="{{asset('libs/datatables/responsive.bootstrap4.min.js') }}"></script>

     <!-- Required datatable js -->
     <script src="{{asset('libs/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{asset('libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
     <!-- Buttons examples -->
     <script src="{{asset('libs/datatables/dataTables.buttons.min.js') }}"></script>
     <script src="{{asset('libs/datatables/buttons.bootstrap4.min.js') }}"></script>
     <script src="{{asset('libs/jszip/jszip.min.js') }}"></script>
     <script src="{{asset('libs/pdfmake/pdfmake.min.js') }}"></script>
     <script src="{{asset('libs/pdfmake/vfs_fonts.js') }}"></script>
     <script src="{{asset('libs/datatables/buttons.html5.min.js') }}"></script>
     <script src="{{asset('libs/datatables/buttons.print.min.js') }}"></script>
     <script src="{{asset('js/pages/datatables.init.js') }}"></script>

      <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>

</html>
