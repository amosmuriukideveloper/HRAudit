<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HR Audit </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
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

    <body>

        <!-- Begin page -->
        <div id="wrapper">
                   @include('layouts.navigation')

            <!-- Page Heading -->
           
            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                    
                                <!-- start page title -->
                                      <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">HR Audit</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">HR Audit</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <x-validation-errors></x-validation-errors>
                        <x-success-message></x-success-message>             
                            
                                {{ $slot }}

                            </div>
                        </div>     
                        
                    
                    </div>
                </div>
                                        
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                {{date("Y")}} &copy; data management tool by <a href="">AmosMuriukideveloper</a>
                            </div>
            
                        </div>
                    </div>
                    
                    
                </footer>      

            </div>     
        </div>
       
        </div>
         <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>

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


    </body>
</html>
