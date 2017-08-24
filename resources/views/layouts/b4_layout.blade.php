<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('img/favicon/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('img/favicon/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
@yield('stylesheets')
<!--    Typed JS-->
    <script src="{{asset('js/typed.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Typed.new('.element', {
                strings: ["księgarni w okolicy?","fotografa?", "bloga modowego?", "architekta?"],
                typeSpeed: 50,
                backSpeed: 0,
                backDelay: 10000,
            });
        });
    </script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8378915219431566",
            enable_page_level_ads: true
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96451175-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<!--Navbar-->
<nav id="mainnavbar" class="navbar navbar fixed-top navbar-toggleable-md navbar-dark  teal">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('img/logo.png')}}" id="brand" alt="Logo WebProgres">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav ml-auto nav-flex-icons">
                @if (!Auth::check())
                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light" href="{{route('login')}}">
                        <i class="fa fa-user-circle-o menu-icon" style="font-size: 30px" aria-hidden="true"></i>
                    </a>
                </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item ">

                        <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-user-circle-o menu-icon" style="font-size: 30px" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-secondary dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item waves-effect waves-light" href="{{route('page.index')}}">Panel użytkownika <span class="sr-only">(current)</span></a>
                            <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Wylogowanie
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')


<!--Footer-->
<footer class="page-footer teal center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">
                    <img src="{{asset('img/logo.png')}}" alt="Logo WebProgres.pl" class="col-md-4">
                </h5>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">więcej</h5>
                <ul>
                    {{--<li><a href="{{url('credits')}}">Wspierają nas</a></li>--}}
                    <li><a href="{{url('help')}}">Pomoc</a></li>
                    <li><a href="{{url('rules')}}">Zasady</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="http://www.webprogres.pl"> WebProgres.pl </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
{{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e128bd512760df"></script>--}}
<!--  Jquery  -->
<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<!--    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!--      Waypoints  -->
<script src="{{asset('js/jquery.waypoints.js')}}"></script>
<!--  Bootstrap core JavaScript-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/mdb.min.js')}}"></script>

<!--  Custom scripts  -->
<script src="{{asset('js/waypoint.js')}}"></script>
<script src="{{asset('js/animations.js')}}"></script>
@yield('scripts')
</body>
</html>
