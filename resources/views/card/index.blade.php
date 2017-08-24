@extends('layouts.b4_layout')
@section('title', $title)
@section('stylesheets')
@endsection
@section('scripts')

@endsection
@if(isNonEmptyString(strip_tags(str_limit($page->content, 278))))
    @section('description',strip_tags(str_limit($page->content, 278)))
@else
    @section('description','Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.'))
@endif


@section('keywords', $page->keywords)

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

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/category/'.$category->slug) }}">{{$category->name}}</a></li>
            <li class="breadcrumb-item"><a href="{{ url('ranking/wojewodztwo/'.$region->slug) }}">{{ ucfirst($region->title)}}</a></li>
            <li class="breadcrumb-item active">{{$page->title}}</li>
        </ol>
        <div class="row">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header text-center default-color-dark white-text">
                        <h1 class="card-title ">{{$page->title}}</h1>
                        <h5>Napisał <strong>{{$author->name}}</strong> dnia <strong>{{$page->created_at->format('d.m.Y')}}</strong>,</h5>
                    </div>

                    <div class="card-block">
                        <p class="card-text">
                            {!! $page->content !!}
                        </p>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 29px">
                    <div class="card card-block">
                        <h4 class="card-title">Zdjęcia</h4>
                        <p class="card-text">
                        <div class="row text-center">
                            <div class="col-md-4" style="margin-top: 20px">
                                    <img class=" img-responsive img-thumbnail" src="https://image.thum.io/get/allowJPG/{{$page->url}}" alt="Mniaturka strony {{$page->url}}">

                                <br/><i>Desktop</i>
                            </div>
                            <div class="col-md-4" style="margin-top: 20px">
                                <img class="img-responsive img-thumbnail" src="https://image.thum.io/get/iphone6plus/allowJPG/{{$page->url}}"  alt="Mniaturka strony {{$page->url}} na iPhone 6 Plus">
                                <br/><i>iPhone 6 Plus</i>
                            </div>
                            <div class="  col-md-4" style="margin-top: 20px">
                                <img class="img-responsive img-thumbnail" src="https://image.thum.io/get/iphone5/allowJPG/{{$page->url}}"  alt="Mniaturka strony {{$page->url}} na iPhone 6 Plus">
                                <br/><i>iPhone 5</i>
                            </div>
                        </div>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-5 ">
                @if($page->email=='' AND $page->phone=='')
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- WebProgres bot -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-8378915219431566"
                data-ad-slot="6942747739"
                data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                @else
                <div class="card ">
                    <div class="card-header default-color-dark white-text text-center">
                        Dane kontaktowe
                    </div>
                    <div class="card-block ">
                        @if($page->email!='')
                             <h4>  <i class="fa fa-envelope contact-data" aria-hidden="true" ></i> {{ $page->email }}</h4><br/>
                        @endif
                        @if($page->phone!='')
                            <h4>  <i class="fa fa-phone contact-data" aria-hidden="true"></i> {{ $page->phone }}</h4>
                            @endif

                    </div>
                </div>
                @endif
                    @if($page->ulica!='' AND $page->kod!='' AND $page->miasto!='' )
                    <div class="card ">
                        <div class="card-header default-color-dark white-text text-center">
                            Adres
                        </div>
                        <div class="card-block ">
                            <h4 class="text-center"> {{$page->ulica}}<br>
                                {{$page->kod}} {{$page->miasto}}<br>
                                Zasięg działania: {{$region->title}}

                            </h4>
                        </div>
                    </div>
                  @endif
                <div class="card text-center">
                    <div class="card-header default-color-dark white-text">
                        Podobne strony
                    </div>
                    <div class="card-block text-center">
                            @if($similar_p->isEmpty())
                                Aktualnie nie ma podobnych stron
                            @endif
                            @foreach ($similar_p as $p)
                                <a href="{{url('card/'.$p->slug)}}"> {{$p->title}}</a>
                                <hr>
                            @endforeach
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- WebProgres linki -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-8378915219431566"
                                     data-ad-slot="5817643331"
                                     data-ad-format="link"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                    </div>
                </div>
                <div class="url-button" style="margin-left: -10px">
                    <a class="btn btn-default col-sm-12" href="{{url($page->url)}}">
                        <span style="font-size: 200%">Odwiedź stronę</span><br>
                        <small>{{$page->url}}</small>
                    </a>
                </div>
                <div class="ad-right">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- WebProgres-right -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8378915219431566"
                         data-ad-slot="5713680131"
                         data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>

    </div>

@endsection