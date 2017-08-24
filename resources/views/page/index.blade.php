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

        <div role="tabpanel" class="tab-pane active" id="sites">
    <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Tytuł</th>
                        <th>Url</th>
                        <th>Data dodania</th>
                        <th>Odwiedziny</th>
                        <th class="col-lg-3">Akcja</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($page->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center" >Brak stron. <a href="{{route('page.create')}}">Dodaj nową stronę</a>.</td>
                        </tr>
                    @endif
         @foreach($page as $p)
                 <tr>
                     <td>{{$p->title}}</td>
                     <td>{{$p->url}}</td>
                     <td>{{$p->created_at}}</td>
                     <td>{{$p->visit}}</td>
                     <td>
                         <div class="action-button-button">
                            <a class="btn btn-success btn-sm" href="{{url('card/'.$p->slug)}}">Podgląd </a>
                         </div>
                         <div class="action-button-button">
                             <a class="btn btn-primary btn-sm" href="{{route('page.edit',$p)}}">Edytuj </a>
                         </div>
                         <div class="action-button-button">
                             {!! Form::model($p, ['route' => ['page.delete', $p],'method' => 'DELETE']) !!}
                             <button class="btn btn-danger btn-sm">Usuń </button>
                             {!! Form::close() !!}
                         </div>

                     </td>
                 </tr>
        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                     <a class="btn btn-success" href="{{route('page.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Dodaj stronę</a>
                </div>
    {{$page->links()}}
    </p>
   </div>
   </div>
   </div>
    </div>
@endsection