<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'tahoma';
            /*background: linear-gradient(to top, lightblue, white, lightblue);*/
            background-image: url(/images/phone.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .liner{
            display: inline-block;
        }


        footer{
            background-color: #2e3436;
            margin-top: 10%;
            color: white;
            flex: 0 0 auto;
            width:100%;
            margin-bottom: 0px;
            padding:5% 5% 5% 10%;

        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
{{--    <nav class="navbar navbar-default navbar-static-top" style="background: linear-gradient(to top, white, lightblue) !important; ">--}}
{{--        <div class="container">--}}
{{--            <div class="navbar-header">--}}

{{--                <!-- Collapsed Hamburger -->--}}
{{--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--                    <span class="sr-only">Toggle Navigation</span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                </button>--}}

{{--                <!-- Branding Image -->--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    Laravel--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="nav navbar-nav">--}}
{{--                   <!-- <li><a href="{{ url('/home') }}">Home</a></li> -->--}}
{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @if (Auth::guest())--}}
{{--                        <li><a href="{{ url('/login') }}">Login</a></li>--}}
{{--                        <li><a href="{{ url('/register') }}">Register</a></li>--}}
{{--                    @else--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <ul class="dropdown-menu" role="menu">--}}
{{--                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
<div class="navbar navbar-dark bg-dark shadow-sm"style="background-color: #2e3436 !important; font-color:white !important; box-shadow: 0 0 15px red">
    <div class="container d-flex justify-content-between">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center" style="color:white !important; font-family: tahoma !important;">
            <div style="margin-top:-5%"><img src="images/logo.png">Кайдзен-идеи</div>
        </a>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}" style="color: white !important;">Вход</a></li>
                <li><a href="{{ url('/register') }}" style="color: white !important;">Регистрация</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       style="color: white !important;">
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

@yield('content')
<footer>
<div>начало футера</div>
    <div>Просто что то</div>
    <div>Запись</div>
    <div>Запись</div>
    <div>Спасибо там кому то</div>
    <div>Copyright</div>
    fff

</footer>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
