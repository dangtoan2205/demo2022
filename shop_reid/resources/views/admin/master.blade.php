<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="source/image/logo/icon1.png">
    <title> Shop Reid </title>

    <!-- Bootstrap -->
    <link href="admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.header')


        @yield('admin.content')


        @include('admin.footer')

      </div>
    </div>

    <!-- jQuery -->
    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="admin/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="admin/build/js/custom.min.js"></script>
  </body>
</html>
