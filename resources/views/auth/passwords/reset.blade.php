@extends('layouts.b4_layout')
@section('title', 'Przypomnij hasło - WebProgres.pl')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <header>
<div class="container" style="min-height: 600px">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-block">
                    <div class="form-header  teal darken-1" >
                        <h3><i class="fa fa-lock"></i> Przypomnienie hasła:</h3>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                                <label for="form4">Twój adres email</label>
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
                                <label for="password">Twoje nowe hasło</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password">Powtórz nowe hasło</label>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Zresetuj hasło
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </header>
@endsection
