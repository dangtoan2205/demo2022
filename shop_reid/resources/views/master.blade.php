<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop Reid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="source/image/logo/icon1.png">
    <link href="source/assets/icon-awesome/css/all.css" rel="stylesheet">
    
    <!-- CSS 
    ========================= -->
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="source/assets/css/plugins.css">
    <link rel="stylesheet" href="source/assets/css/style.css">
    <link rel="stylesheet" href="source/assets/css/news.css">

</head>

<body>

    <!--header start-->
        @include('header')
    <!--header end-->

    <!-- main start -->
    <div class="rev-slider">
        @yield('content')
    </div> 
    <!--main end -->

    <!--footer start-->
        @include('footer')
    <!--footer end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="source/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="source/assets/js/main.js"></script>



</body>

</html>
