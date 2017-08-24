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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('custom2.css')}}">
    <!-- Scripts -->
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Nawigacja</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}"  height="170%" style="margin-top: -10px" alt="WebProgres">
                        </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::check())
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('page.index')}}">Panel użytkownika <span class="sr-only">(current)</span></a></li>
                    </ul>
                    @endif
                    {!! Form::open(['action' => 'SearchController@store', 'class'=>'navbar-form navbar-left']) !!}
                    <div class="input-group">
                    {!! Form::text('search', null,['class'=>'form-control', 'placeholder' => 'Wyszukaj stronę']) !!}
                    <span class="input-group-btn">
                        <button class="btn btn-primary"  type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                        </div>

                    {!! Form::close() !!}

                    {{--<form class="navbar-form navbar-left">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" id="search-input" placeholder="Wyszukaj stronę">--}}
                            {{--<span class="input-group-btn">--}}

                                {{--<button class="btn btn-primary"  type="button"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
                            {{--</span>--}}
                        {{--</div><!-- /input-group -->--}}
                    {{--</form>--}}
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorie <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('category/motoryzacja')}}">Motoryzacja</a></li>
                                <li><a href="{{url('category/sztuka-i-rozrywka')}}">Sztuka i rozrywka</a></li>
                                <li><a href="{{url('category/uroda-i-fitness')}}">Uroda i fitness</a></li>
                                <li><a href="{{url('category/komputery-i-elektronika')}}">Komputery i elektronika</a></li>
                                <li><a href="{{url('category/ksiazki-i-literatura')}}">Książki i literatura</a></li>
                                <li><a href="{{url('category/finanse')}}">Finanse</a></li>
                                <li><a href="{{url('category/gry')}}">Gry</a></li>
                                <li><a href="{{url('category/hobby-i-wypoczynek')}}">Hobby i wypoczynek</a></li>
                                <li><a href="{{url('category/wiadomosci')}}">Wiadomości</a></li>
                                <li><a href="{{url('category/spolecznasci-online')}}">Społeczności online</a></li>
                                <li><a href="{{url('category/zwierzeta')}}">Zwierzęta</a></li>
                                <li><a href="{{url('category/nieruchomosci')}}">Nieruchomości</a></li>
                                <li><a href="{{url('category/referencje')}}">Referencje</a></li>
                                <li><a href="{{url('category/nauka')}}">Nauka</a></li>
                                <li><a href="{{url('category/zakupy')}}">Zakupy</a></li>
                                <li><a href="{{url('category/sport')}}">Sport</a></li>
                                <li><a href="{{url('category/podroze')}}">Podróże</a></li>
                                <li><a href="{{url('category/budownictwo')}}">Budownictwo</a></li>
                                <li><a href="{{url('category/inne')}}">Inne</a></li>


                            </ul>
                        </li>
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Logowanie</a></li>
                            <li><a href="{{ route('register') }}">Rejestracja</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="min-height: 600px">
            <div class="col-md-12">
                <!-- Nav tabs --><div class="card">
                    <ul class="nav nav-tabs" >
                            <li role="presentation" @if(Request::is('home')) class="active" @endif ><a href="{{ url('/home')  }}">Panel użytkownika</a></li>
                            <li role="presentation" @if(Request::is('page') OR Request::is('page/edit/*') OR Request::is('page/create')) class="active" @endif><a href="{{ url('/page')  }}">Moje strony</a></li>
                    </ul>
                   @yield('content')
                </div>
            </div>
    </div>
        <svg class="topLeftRounded" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="50 20 50 80" preserveAspectRatio="none">
            <path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
        </svg>
        <div class="footer">
            <div class="container text-center">
                <div class="footer-logo">
                    <i class="fa fa-line-chart" aria-hidden="true"></i> WebProgres.pl
                </div>
                <div style="margin-top: 20px">
                    <a class="footer-href" href="{{url('/credits')}}">Wspierają nas</a> |
                    <a class="footer-href" href="{{url('/help')}}">Pomoc</a> |
                    <a class="footer-href" href="{{url('/rules')}}">Zasady</a>
                </div>
                <div class="copyrighting-text" style="margin-top: 100px">
                    Wszelkie prawa zastrzeżone<br> WebProgres.pl - 2017
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    @if(Request::is('page/create') ? 'active' : ''  OR Request::is('page/edit/*') ? 'active' : '' )
        <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=s5v0azt6qmtgrlbdpqxuickgtgb90z9i0ujh5a23jmxlkj38"></script>
         <script>tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            image_class_list: [
                {title: 'Responsywne', value: 'img-responsive'}
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
             $(function () {
                 $('[data-toggle="popover"]').popover()
             })
    </script>

    @endif
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-96451175-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e128bd512760df"></script>

</body>
</html>
