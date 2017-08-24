@extends('layouts.b4_layout')
@section('title', 'Logowanie - WebProgres.pl')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <header>

        <div class="container" style="min-height: 500px;">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-block">
                            <div class="form-header  teal darken-1" >
                                <h3><i class="fa fa-lock"></i> Logowanie:</h3>
                            </div>
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        <label for="email">Twój adres email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <label for="password">Twoje hasło</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamiętaj logowanie
                                            </label>
                                        </div>
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Logownie
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Zapomniałeś hasła?
                                        </a>
                                </div>
                            </form>
                            <h3>Nie masz jeszcze konta?</h3>
                            <a class="btn teal col-md-12" href="{{route('register')}}">Zarejestruj się!</a>
                        </div>
                    </div>
                </div>
            </div>

    <!--/.Panel-->

    </header>

@endsection
