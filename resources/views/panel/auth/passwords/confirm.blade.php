@extends('layouts.app')

@section('content')
    <div class="mb-20">
        <h4>Admin Panel Parola Onaylama Formu</h4>
        <p class="opacity-60">Devam etmeden önce lütfen parolanızı onaylayınız.</p>
    </div>

    @component('panel.components.alert.validation-errors')@endcomponent

    <form class="form" method="POST" action="{{ route(config('app.panel_prefix') . 'password.confirm') }}">
        @csrf

        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="password" placeholder="Parola" name="password" autocomplete="current-password" />
        </div>

        <div class="form-group">
            <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Parolamı Onayla</button>

            @if (Route::has(config('app.panel_prefix') . 'password.request'))
                <a href="{{ route(config('app.panel_prefix') . 'password.request') }}"
                   class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Parolamı Unuttum ?</a>
            @endif
        </div>
    </form>
@endsection
