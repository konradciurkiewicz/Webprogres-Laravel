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
                        <h3><i class="fa fa-lock"></i> Przypomnienie hasła</h3>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="form2">Twój adres email</label>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 mx-auto">
                                <button type="submit" class="btn teal waves-effect">
                                    Wyślij E-mail Resetujący Hasło
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
