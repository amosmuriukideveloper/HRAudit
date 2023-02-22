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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />

         <!-- third party css -->
         <link href="{{asset('libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{asset('libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{asset('libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                         {{ $slot }}
                
                
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
