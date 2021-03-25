@extends('layouts.app')

@section('content')
    <div class="mb-20">
        <h4>Admin Panel Parola Yenileme Formu</h4>
    </div>
    @component('panel.components.alert.validation-errors')@endcomponent
    <form class="form" method="POST" action="{{ route(config('app.panel_prefix') . 'password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="text" placeholder="E-posta" name="email" autocomplete="email" value="{{ $email ?? old('email') }}" autofocus />
        </div>
        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="password" placeholder="Parola" name="password" autocomplete="new-password" />
        </div>
        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="password" placeholder="Parola (Tekrar)" name="password_confirmation" autocomplete="new-password" />
        </div>
        <div class="form-group text-center mt-10">
            <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Parolamı Yenile</button>
        </div>
    </form>
@endsection
