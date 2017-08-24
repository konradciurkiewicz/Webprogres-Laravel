@extends('layouts.app')
@section('title', 'Darmowa reklama strony internetowej | Zwiększ oglądalność swojej strony')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')


@section('content')
<div class="header-container" style="background-image: url({{asset('img/welcome/background.png')}}),linear-gradient(135deg, #0d47a1 0%, #1e88e5 100%);">
    <div class="container " style="margin-top: 60px" >
        <div class="col-lg-6 col-md-6 text-with-bg">

                <h1 class="text-header-welcome hidden-xs">Zareklamuj swoją stronę za darmo i zyskuj popularność. <br>
                </h1>
                <h3 class="text-header-welcome-sub"> Zarejestruj się i dodaj reklamę swojej strony. To zajmie tylko kilka minut i nic nie kosztuje.</h3>

        </div>
        <div style="margin-top: 30px" class="col-lg-6 col-md-6">
            @if (Auth::guest())
                <div class="panel panel-default">
                    <div class="panel-body">
                    <h3 class="text-center" >Zarejestruj się za darmo</h3><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nazwa użytkownika</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adres E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Hasło</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Powtórz Hasło</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Zarejestruj
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="text-center">Witaj, {{Auth::user()->name}}!</h3>
                        <p class="text-center"> <a href="{{route('page.index')}}" role="button"> Przeglądaj strony</a> lub</p>
                        <p class="text-center"> <a class="btn btn-primary btn-lg" href="{{route('page.create')}}" role="button"><i class="fa fa-plus" style="font-size: 150%" aria-hidden="true"></i> Dodaj nową stronę</a></p>
                    </div>
                </div>

            @endif

        </div>

    </div>

</div>
<div class="container text-center">
    <a type="button" href="javascript:void();" onclick="scroll_to('#bottom');" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

</div>


<div class="landing-block-light" id="bottom">

        <div class="container">
            <div class="col-md-7 col-sm-6">
                <h2 class="langing-header">Stwórz unikatową reklamę dla swojej witryny
                    <hr>
                    <small>Dzięki zaawansowanym edytorom, możesz w łatwy sposób stworzyć orginalną, dobrze prezentującą się wizytówkę swojej strony.</small>
                </h2>
            </div>
            <div class="col-md-5 col-sm-6">
                <img src="{{asset('img/welcome/coding.svg')}}" alt="Edytor graficzny" class="img-responsive">
            </div>
        </div>
    </div>
<svg class="topLeftRounded" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="50 20 50 80" preserveAspectRatio="none">
    <path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
</svg>
<div class="landing-block-color">

    <div class="col-md-5 col-sm-6">
        <img src="{{asset('img/welcome/analytics.svg')}}" alt="Statystyki" class="img-responsive">
    </div>
        <div class="container">
            <div class="col-md-7 col-sm-6">
                <h2>Zyskaj pełny obraz dzięki statystykom<br><hr>

                </h2>
                <span class="description">Dzięki zaawansowanym edytorom, możesz w łatwy sposób stworzyć orginalną, dobrze prezentującą się wizytówkę swojej strony.</span>

            </div>

        </div>
    </div>
<svg class="botRound" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 20 50 80" preserveAspectRatio="none">
    <path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
</svg>


<footer class="landing-block-light">
    <div class="container">

        <div class="col-md-7 col-sm-6">
            <h2 class="langing-header">Pozycjnonuj swoją stronę<br><hr>

                <small>Podnieś swoją stronę w rankingach wyszukiwarek dzięki odnośnikom, tagom, oraz odpowiednio dostosowanej treści.</small>
            </h2>
        </div>
        <div class="col-md-5 col-sm-6">
            <img src="{{asset('img/welcome/progres.svg')}}" alt="Pozycjonowanie" class="img-responsive">
        </div>
    </div>
</footer>

@endsection
