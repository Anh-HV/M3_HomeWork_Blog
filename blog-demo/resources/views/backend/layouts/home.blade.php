<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Home Page</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="./app/view/Layout/css/simplebar.css">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/feather.css') }}"> 
    <link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/quill.snow.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('backend/css/app-dark.css') }}" id="darkTheme">
</head>
<body class="vertical  dark  ">
@include('backend.layouts.header')
<main role="main" class="main-content">
    <div class="container-fluid">
        @yield('content')        
    </div>
</main>
<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('backend/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('backend/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('backend/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <script src="{{ asset('backend/js/d3.min.js') }}"></script>
    <script src="{{ asset('backend/js/topojson.min.js') }}"></script>
    <script src="{{ asset('backend/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('backend/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('backend/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('backend/js/Chart.min.js') }}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('backend/js/gauge.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('backend/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
</body>
</html>
