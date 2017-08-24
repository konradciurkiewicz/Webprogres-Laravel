@extends('layouts.b4_layout')
@section('title', 'Edytuj: '.$page->title.' - WebProgres.pl')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')
@section('scripts')
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

    {!! Form::model($page, ['route' => ['page.update', $page], 'method' => 'PUT']) !!}
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="alert alert-info" role="alert">Uzupełnij pola zgodnie z wskazówkami, gdyż ma to wpływ na pozycjonowanie się strony.</div>
            <div class="row">
                <div class="card col-md-6">
                    <div class="card-header danger-color-dark white-text">
                        Informacje wymagane
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                        <div class="form-group" data-toggle="popover" data-placement="top" title="Podpowiedź"  data-content="Tytuł powinien zwięźle opisywać tematykę strony. Powinien w sobie zawierać kilka słów kluczowych.">
                            {!! Form::label('title',"Tytuł:") !!}
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder' => 'Np. Blog o modzie | Najnowsze kreacje, stylizacje - Mojastrona.pl', 'data-toggle' => 'popover']) !!}

                        </div>

                        <div class="form-group" >
                            {!! Form::label('page_type_id',"Kategoria (forma strony):") !!}
                            {{ Form::select('page_type_id', $pagetype, null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group" >
                            {!! Form::label('categories_id',"Tematyka:") !!}
                            {{ Form::select('categories_id', $categories, null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {!! Form::label('url',"Adres URL:") !!}
                            {!! Form::text('url', null,['class'=>'form-control', 'placeholder' => 'np. http://mojastrona.pl']) !!}
                        </div>
                        <div class="form-group"  data-toggle="popover" data-placement="top" title="Podpowiedź"  data-content="Wypisz po przecinku tagi (słowa kluczowe) swojej strony. ">
                            {!! Form::label('keywords',"Tagi strony:") !!}
                            {!! Form::text('keywords', null,['class'=>'form-control', 'placeholder' => 'np. najnowe kreacje, płaszcze lato 2016, modne ubrania, blog modowy, moda damska']) !!}
                        </div>
                        </p>
                    </div>
                </div>
                <div class="card col-md-6">
                    <div class="card-header primary-color-dark white-text">
                        Informacje dodatkowe
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                        <div class="form-group"   >
                            {!! Form::label('email',"Email kontantowy:") !!}
                            {!! Form::text('email', null,['class'=>'form-control', 'placeholder' => 'example@domain.com', 'data-toggle' => 'popover']) !!}

                        </div>
                        <div class="form-group"   >
                            {!! Form::label('phone',"Telefon kontaktowy:") !!}
                            {!! Form::text('phone', null,['class'=>'form-control', 'placeholder' => '123456789', 'data-toggle' => 'popover']) !!}

                        </div>
                        <div class="form-group"   >
                            {!! Form::label('kod',"Kod pocztowy") !!}
                            {!! Form::text('kod', null,['class'=>'form-control', 'placeholder' => '00-000', 'data-toggle' => 'popover']) !!}

                        </div>
                        <div class="form-group"   >
                            {!! Form::label('ulica',"Ulica:") !!}
                            {!! Form::text('ulica', null,['class'=>'form-control', 'placeholder' => 'ul. Ulica 1', 'data-toggle' => 'popover']) !!}
                        </div>
                        <div class="form-group"   >
                            {!! Form::label('miasto',"Miasto:") !!}
                            {!! Form::text('miasto', null,['class'=>'form-control',  'data-toggle' => 'popover']) !!}
                        </div>

                        <div class="form-group" >
                            {!! Form::label('region',"Zasięg działania:") !!}
                            {{ Form::select('region', $regions, null, array('class' => 'form-control')) }}
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('content',"Opis strony:") !!}
                {!! Form::textarea('content', null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz',['class' => 'btn btn-primary waves-effect']) !!}
                {!! link_to(URL::previous(), 'Powrót',['class'=>'btn btn-outline-default waves-effect']) !!}
            </div>
        {!! Form::close() !!}
        </p>
    </div>
    </div>
@endsection