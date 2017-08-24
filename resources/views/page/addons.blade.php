@extends('layouts.b4_layout')
@section('title', 'Twoje strony - WebProgres.pl')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <div class="container" style="padding-top: 100px">
        <div class="teal darken-2">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- WebProgres-top -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8378915219431566"
             data-ad-slot="1143879732"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>
        <nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @if(Request::is('home'))active @endif" >
                            <a class="nav-link" href="{{url('home')}}"><i class="fa fa-bell-o" aria-hidden="true"></i> Powiadomienia <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item @if(Request::is('page'))active @endif" >
                            <a class="nav-link" href="{{url('page')}}"> <i class="fa fa-clone" aria-hidden="true"></i> Strony <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item @if(Request::is('page/addons'))active @endif" >
                            <a class="nav-link" href="{{url('page/addons')}}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Dodatki <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="card card-block">
            <p class="card-text">
            <h1>Zamieść baner na swojej stronie</h1>
            <h5>Baner jest świetnym sposobem, aby więcej ludzi nas odwiedziło. Będziemy bardzo wdzięczni jeżeli zamieścisz na swojej stronie jeden z poniższych odnośników. Nie jest to obowiązkowe, jednak każde przejście z twojej strony na WebProgres.pl <strong>zwiększa pozycję twojej strony w naszych rankingach, toplistach, oraz wynikach wyszukiwania</strong>. </h5>
            <h3>Baner duży </h3>
            <img src="{{asset('img/addons/big-horizontal.png')}}" style="width: 728px; height: 160px" alt="WebProgres baner">
            <code>
                &lt;a href="http://webprogres.pl/" &gt;<br/>
                &nbsp; &nbsp;&lt;img src="http://webprogres.pl/img/addons/big-horizontal.png style="width: 728px; height: 160px"&gt;<br/>
                &lt;/a&gt;

            </code>
            <h3>Baner średni </h3>
            <img src="{{asset('img/addons/medium-horizontal-bg.png')}}" style="width: 410px; height: 90px" alt="WebProgres baner">
            <code>
                &lt;a href="http://webprogres.pl/" &gt;<br/>
                &nbsp; &nbsp;&lt;img src="http://webprogres.pl/img/addons/big-horizontal.png style="width: 410px; height: 90px"&gt;<br/>
                &lt;/a&gt;

            </code>
            <h3>Baner mały </h3>
            <img src="{{asset('img/addons/small-horizontal-bg.png')}}" style="width: 228px; height: 50px" alt="WebProgres baner">
            <code>
                &lt;a href="http://webprogres.pl/" &gt;<br/>
                &nbsp; &nbsp;&lt;img src="http://webprogres.pl/img/addons/big-horizontal.png style="width: 228px; height: 50px"&gt;<br/>
                &lt;/a&gt;

            </code>
            <div role="tabpanel" class="tab-pane active" id="sites">
    <div>


   </div>
   </div>
   </div>
    </div>
@endsection