@extends('layouts.b4_layout')
@section('title', 'Rejestracja - WebProgres.pl')
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
                                <h3><i class="fa fa-lock"></i> Rejestracja:</h3>
                            </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="form2">Nazwa użytkownika</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="md-form">
                                <i class="fa fa-envelope  prefix"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="form2">Adres email</label>
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
                                <label for="form4">Hasło</label>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="form4">Powtórz hasło</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Zarejestruj
                                </button>
                            </div>
                        </div>
                    </form>
                            <h3>Masz już konto?</h3>
                            <a class="btn btn-outline-default waves-effect teal-text col-md-12" href="{{route('login')}}">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Wróć do logowania</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </header>
@endsection
