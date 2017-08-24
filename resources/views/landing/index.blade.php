@extends('layouts.b4_layout')
@section('title', 'Darmowa reklama strony internetowej | Zwiększ oglądalność swojej strony')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')
@section('content')

        <header >
        <div class="header-content container">
            <img src="img/logo.png" style="width:50%">
            <h1>Zbiór najlepszych stron internetowych</h1>
            <h2 class="typed-text">Szukasz <div style="display: inline;" class="element"></div></h2>
            {!! Form::open(['action' => 'SearchController@index', 'method'=>'GET', 'class'=>'navbar-form navbar-left']) !!}
            <div class="input-group mx-auto">
                {!! Form::text('search', null,['class'=>'main-search-input', 'placeholder' => "Nazwa kategoria tematyka miasto", 'style'=>'font-family:Arial, FontAwesome']) !!}
                <button type="submit" class="search-submit"><i class="fa fa-search"></i> </button>
            </div>

            {!! Form::close() !!}
        </div>
    </header>

    <div class="colors">
        <div id="first"></div>
        <div id="second"></div>
        <div id="third"></div>
    </div>
    {{--<div id="arrow-box" style="margin-top:-100px; text-align:center; color:#ffffff; margin-bottom:100px;">--}}
        {{--<i class="fa fa-angle-down" aria-hidden="true" id="arrow"></i>--}}
    {{--</div>--}}
    {{--<!-- Marketing messaging and featurettes--}}
    {{--================================================== -->--}}
    {{--<!-- Wrap the rest of the page in another container to center all the content. -->--}}

    {{--<div class="container marketing">--}}

        {{--<!-- Three columns of text below the carousel -->--}}
        {{--<div class="row" id="tri-info">--}}
            {{--<div class="col-lg-4">--}}
                {{--<img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
                {{--<h2>Heading</h2>--}}
                {{--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>--}}
                {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
            {{--</div><!-- /.col-lg-4 -->--}}
            {{--<div class="col-lg-4">--}}
                {{--<img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
                {{--<h2>Heading</h2>--}}
                {{--<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>--}}
                {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
            {{--</div><!-- /.col-lg-4 -->--}}
            {{--<div class="col-lg-4">--}}
                {{--<img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
                {{--<h2>Heading</h2>--}}
                {{--<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
                {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
            {{--</div><!-- /.col-lg-4 -->--}}
        {{--</div><!-- /.row -->--}}
    {{--</div>--}}

    {{--<!-- START THE FEATURETTES -->--}}

    {{--<div class="col-md-12">--}}
        {{--<div class="row info-block" id="bg-sea">--}}
            {{--<div class="col-md-6">--}}
                {{--<h2 class="featurette-heading">First featurette heading.</h2>--}}
                {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 " id="sea-image">--}}
                {{--<img class="img-fluid img-info-right" src="img/city.jpg" alt="Generic placeholder image ">--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row info-block" id="bg-metalic">--}}
            {{--<div class="col-md-6">--}}
                {{--<img class="img-fluid img-info-left" src="img/city.jpg" alt="Generic placeholder image ">--}}

            {{--</div>--}}
            {{--<div class="col-md-6 ">--}}
                {{--<h2 class="featurette-heading">First featurette heading.</h2>--}}
                {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row info-block" id="bg-sea">--}}
            {{--<div class="col-md-6">--}}
                {{--<h2 class="featurette-heading">First featurette heading.</h2>--}}
                {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 ">--}}
                {{--<img class="img-fluid" src="img/sun.jpg" alt="Generic placeholder image ">--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<!-- /END THE FEATURETTES -->--}}


    {{--<!-- FOOTER -->--}}
    {{--<footer>--}}
        {{--<p class="float-right"><a href="#">Back to top</a></p>--}}
        {{--<p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>--}}
    {{--</footer>--}}

    {{--<!-- /.container -->--}}
@endsection