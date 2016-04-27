<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>"/>
    <title>StrPrinter</title>

    <!-- Styles -->
    {{--<link href="backend/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="backend/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="backend/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="backend/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="backend/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    @yield('styles')

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                StrPrinter
            </a>

            <ul class="nav navbar-nav">
                <li class="active"><a href="/catridge/show">Катриджи<span class="sr-only">(current)</span></a></li>
                <li><a href="/printer/show">Принтера</a></li>
                <li><a href="/statistics">Статистика</a></li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}"></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/manager">Админка</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@include('backend.include.right_menu')
@yield('content')

        <!-- JavaScripts -->
<!-- jQuery Version 1.11.0 -->
<script src="backend/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="backend/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="backend/js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Flot Charts JavaScript -->
<script src="backend/js/plugins/flot/excanvas.min.js"></script>
<script src="backend/js/plugins/flot/jquery.flot.js"></script>
<script src="backend/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="backend/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="backend/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="backend/js/plugins/flot/flot-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="backend/js/sb-admin-2.js"></script></body>

@yield('scripts')
</html>
