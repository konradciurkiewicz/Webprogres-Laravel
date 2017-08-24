@extends('layouts.b4_layout')
@section('title', 'Pomoc serwisu WebProgres.pl')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <div class="container " style="min-height: 600px; padding-top: 20px">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Strona główna</a></li>
            <li class=" breadcrumb-item active">Pomoc</li>
        </ol>

        <div class="card card-block">
            <h1 class="card-title">Kontakt</h1>

                W przypadku problemów, pytań, lub propozycji prosimy kontaktować się poprzez adres email zamieszczony poniżej.
                E-mail: <strong>pomoc@webprogres.pl </strong>
            </div>
        </div>
    </div>
@endsection