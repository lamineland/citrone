<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('adminty/files\assets\images\favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty/files\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{{ asset('adminty/files\assets\pages\chart\radial\css\radial.css') }}" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty/files\assets\icon\feather\css\feather.css') }}">
    <!-- font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty/files\assets\icon\font-awesome\css\font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty/files\assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty/files\assets\css\jquery.mCustomScrollbar.css') }}">
</head>
<!-- Menu sidebar static layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('backend.menu')

            @include('backend.chat-sidebar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    @include('backend.sidebar')

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\jquery/js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\popper.js\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\modernizr\js\modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\modernizr\js\css-scrollbars.js') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('adminty/files\bower_components\chart.js\js\Chart.js') }}"></script>
    <!-- Google map js -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\assets\pages\google-maps\gmaps.js') }}"></script>
    <!-- gauge js -->
    <script src="{{ asset('adminty/files\assets\pages\widget\gauge\gauge.min.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\pages\widget\amchart\amcharts.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\pages\widget\amchart\serial.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\pages\widget\amchart\gauge.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\pages\widget\amchart\pie.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\pages\widget\amchart\light.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('adminty/files\assets\js\pcoded.min.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\js\vartical-layout.min.js') }}"></script>
    <script src="{{ asset('adminty/files\assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\assets\pages\dashboard\crm-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty/files\assets\js\script.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
