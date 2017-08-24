@extends('layouts.b4_layout')
@section('title', 'Wyniki wyszukiwania dla: '.$search )
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <div class="container">
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
        <div class="card card-block" style="margin-top: 5px">

        <h1>Wyniki wyszukiwania dla "{{$search}}"</h1>

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
                        @if($page->isEmpty())
                            <h4 class="media-heading text-center">Brak wyników wyszukiwania</h4>
                        @endif
                            @foreach($page as $p)
                               <div class="search-element media" style="margin-top: 20px">
                                   <img class="mr-3" style="height: 128px; width: 128px"  src="https://image.thum.io/get/allowJPG/{{$p->url}}" alt="Generic placeholder image">
                                   <div class="media-body">
                                        <a href="{{url('card/'.$p->slug)}}">
                                            <h4 class="mt-0" style="margin-top: 20px">{{$p->title}}</h4>
                                        </a>
                                        <div style="color: #008000">{{str_limit($p->url, 100)}}</div>
                                       {{strip_tags(str_limit($p->content, 278))}}
                                     </div>
                               </div>
                            @endforeach
            {{$page->appends(['search' => $search])->links()}}
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
                    </div>

    </div>

    </div>

@endsection