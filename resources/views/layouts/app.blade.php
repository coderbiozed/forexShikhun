<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forex Shikhun Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/930024346158768188/1003218757424009236/Forex-shikhun-froms.ai-1-fav.png" type="image/x-icon">
          
           <!-- DataTables -->
           
          <!-- DataTables end-->

         <link href="{{ mix('css/app.css') }}" rel="stylesheet">
         <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light cust_shadow">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="https://cdn.discordapp.com/attachments/930024346158768188/1003218757424009236/Forex-shikhun-froms.ai-1-fav.png"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="https://cdn.discordapp.com/attachments/930024346158768188/1003218757424009236/Forex-shikhun-froms.ai-1-fav.png"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2022 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>
</div>
    
<!-- images style -->
    <style>
            dl, ol, ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .imgPreview img {
                padding: 8px;
                max-width: 100px;
            } 
            .imgPreview-main img {
                padding: 8px;
                max-width: 100px;
            }
            .imgPreview-logo img {
                padding: 8px;
                max-width: 100px;
            }
            .imgPreview-banner img {
                padding: 8px;
                max-width: 100px;
            }
    </style>

  
  
    <!-- DataTables  & Plugins end-->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    
      <!--  data table -->
      <script>
        $(document).ready( function () {
         $('#myTable').DataTable();
         } );
       </script>
    <script type="text/javascript">
        $('#publish_date').datepicker({  
        format: 'dd-mm-yyyy',
        autoclose: true,
        });  
    </script> 
    <!-- Text Editor -->
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.ckeditor').ckeditor();
        });
    </script>
    <!-- Image Upload -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        $('#main_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-main');
        });
        $('#logo_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-logo');
        });
        $('#image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-banner');
        });
        });    
    </script>
    <!-- Blog Auto Slug Filled field -->
    <script type="text/javascript">
        $("#title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#slug").val(Text);        
        });
    </script>
    <!-- Course  Auto Slug Filled field -->
    <script type="text/javascript">
        $("#course_title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#course_slug").val(Text);        
        });
    </script>
    <!-- Course Lesson Auto Slug Filled field -->
    <script type="text/javascript">
        $("#lesson_title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#lesson_slug").val(Text);        
        });
    </script>
  


    @yield('third_party_scripts')

    @stack('page_scripts')
</body>
</html>
