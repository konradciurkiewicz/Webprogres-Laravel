@extends('layouts.b4_layout')
@section('title', 'Regulamin strony WebProgres.pl. Zasady korzystania z serwisu.')
@section('description', 'Darmowa reklama strony internetowej. Stwórz wizytówkę, dzięki której poprawisz swoją pozycję w wyszukiwarkach.')
@section('keywords', 'reklama, strona, internetowa, darmowa, pozycjonowanie, wyszukiwarki, toplista')

@section('content')
    <div class="container " style="min-height: 600px; padding-top: 20px">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Strona główna</a></li>
            <li class=" breadcrumb-item active">Zasady</li>
        </ol>

        <div class="card card-block">
            <h1 class="card-title">Zasady serwisu internetowego WebProgres.pl</h1>
                <hr>
                <h3>WARUNKI OGÓLNE</h3>
                <ol>
                    <li>
                        Niniejszy Regulamin określa zasady i warunki korzystania z strony internetowej znajdującej się pod adresem http://www.webprogres.pl/ (zwanego dalej „Serwis”).

                    </li>
                    <li>
                        Warunkiem korzystania z Serwisu jest dobrowolne zaakceptowanie przez Użytkownika postanowień Regulaminu. Korzystanie przez Użytkownika z Forum oznacza, że uważnie zapoznał się on z treścią Regulaminu, dobrowolnie akceptuje jego treść.                    </li>
                </ol>
                <h3>WARUNKI KORZYSTANIA Z SERWISU</h3>
                <ol>
                    <li>
                        Dodawanie treści do strony jest możliwe wyłącznie po zalogowaniu.
                    </li>
                    <li>
                        Użytkownik publikuje treści w serwisie wyłącznie na własną odpowiedzialność.
                        Administrator nie ponosi odpowiedzialności za treści zamieszczane przez Użytkowników na stronie.


                    </li>
                    <li>
                        Niedopuszczalne jest zamieszczanie przez Użytkowników treści sprzecznych z prawem lub dobrymi obyczajami, wzywających do nienawiści rasowej, wyznaniowej, etnicznej, czy propagujących przemoc w świecie rzeczywistym.
                    </li>
                    <li>
                        Niedopuszczalne jest zamieszczanie przez Użytkowników treści o charakterze erotycznym, oraz innych treści przeznaczonej dla osób powyżej osiemnastego roku życia.
                    </li>
                    <li>
                        Administrator ma prawo do edytowania treści umieszczanych przez Użytkownika lub nawet usuwanie ich, w przypadku łamania Regulaminu.
                    </li>
                </ol>
                <h3>POSTANOWIENIA KOŃCOWE</h3>
                <ol>
                    <li>
                        Administrator ma prawo do zmiany Regulaminu, za uprzednim powiadomieniem Użytkownika
                    </li>
                    <li>
                        Niezastosowanie się do regulaminu przez Użytkownika może skutkować usunięciem konta, lub zablokowaniem możliwości rejestracji przez Użytkownika.
                    </li>
                    <li>
                        Regulamin wchodzi w życie z dniem 29 marca 2017 roku.
                    </li>
                </ol>
            </div>
        </div>

@endsection