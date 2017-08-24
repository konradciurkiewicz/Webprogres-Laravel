@extends('layouts.b4_layout')
@section('title', 'Wojewódzki ranking stron. Toplista stron w poszczególnych województwach.')
@section('description', 'Ranking stron w poszczególnych województwach. Najlepsze strony w każdym województwie. Regionalny ranking stron. Toplista najlepszych stron w poszczególnych województwach.')
@section('keywords', 'toplista, top20, top 10, top 50, ranking stron, najlepsze strony, spis stron, to')
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{asset('cssmap-poland/cssmap-poland/cssmap-poland.css')}}" media="screen" />
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

// CSSMap;
            $("#map-poland").CSSMap({
                "size": 960,
                "tooltips": "floating-top-center",
                "responsive": "auto"            });
// END OF THE CSSMap;

        });
    </script>
    </body>
@endsection
@section('content')
    <div class="container ">

        <div class="text-center"  style="margin-top: 80px; margin-bottom: 5px">
            <div class="hidden-md-down teal teal darken-2">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Card Billboard L -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:750px;height:300px"
                     data-ad-client="ca-pub-8378915219431566"
                     data-ad-slot="5429193732"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="hidden-sm-up">
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
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header default-color-dark white-text">
                        <h1 class="card-title">Wojewódzki ranking stron/firm</h1>

                    </div>
                    <div class="card-block">
                        <div id="map-poland">
                            <ul class="poland">
                                <li class="pl1 "><a href="{{url('ranking/wojewodztwo/dolnoslaskie')}}">Dolnośląskie</a></li>
                                <li class="pl2"><a href="{{url('ranking/wojewodztwo/kujawsko-pomorskie')}}">Kujawsko-pomorskie</a></li>
                                <li class="pl3"><a href="{{url('ranking/wojewodztwo/lubelskie')}}">Lubelskie</a></li>
                                <li class="pl4"><a href="{{url('ranking/wojewodztwo/lubuskie')}}">Lubuskie</a></li>
                                <li class="pl5"><a href="{{url('ranking/wojewodztwo/lodzkie')}}">Łódzkie</a></li>
                                <li class="pl6"><a href="{{url('ranking/wojewodztwo/malopolskie')}}">Małopolskie</a></li>
                                <li class="pl7"><a href="{{url('ranking/wojewodztwo/mazowieckie')}}">Mazowieckie</a></li>
                                <li class="pl8"><a href="{{url('ranking/wojewodztwo/opolskie')}}">Opolskie</a></li>
                                <li class="pl9"><a href="{{url('ranking/wojewodztwo/podkarpackie')}}">Podkarpackie</a></li>
                                <li class="pl10"><a href="{{url('ranking/wojewodztwo/podlaskie')}}">Podlaskie</a></li>
                                <li class="pl11"><a href="{{url('ranking/wojewodztwo/pomorskie')}}">Pomorskie</a></li>
                                <li class="pl12"><a href="{{url('ranking/wojewodztwo/slaskie')}}">Śląskie</a></li>
                                <li class="pl13"><a href="{{url('ranking/wojewodztwo/swietokrzyskie')}}">Świętokrzyskie</a></li>
                                <li class="pl14"><a href="{{url('ranking/wojewodztwo/warminsko-mazurskie ')}}">Warmińsko-mazurskie</a></li>
                                <li class="pl15"><a href="{{url('ranking/wojewodztwo/wielkopolskie')}}">Wielkopolskie</a></li>
                                <li class="pl16"><a href="{{url('ranking/wojewodztwo/zachodniopomorskie')}}">Zachodniopomorskie</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection