@extends('layouts.b4_layout')
@section('title', 'Panel użytkownika' )
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
        </div>        <nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
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
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row">
            <div class="col-lg-12">
                <h2> Powiadomienia</h2>
                @foreach($noti as $n)
                    <div class="card card-block">
                    <p class="card-text">
                        <strong>{{$n->title}}</strong><span class="pull-right"> {{$n->created_at->format('d.m.Y')}}</span><br>
                        {{$n->content}}
                    </p>
                </div>
                @endforeach
                @if($noti->isEmpty())
                    Brak powiadomień do wyświetlenia.
                @endif
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
