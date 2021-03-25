@extends('panel.auth.layouts.app')

@section('content')
    <div class="mb-20">
        <h4>Admin Panel Giriş Formu</h4>
    </div>
    @component('panel.components.alert.validation-errors')@endcomponent
    <form class="form" method="POST" action="{{ route(config('app.panel_prefix') . 'login') }}">
        @csrf

        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="text" placeholder="E-posta" name="email" autocomplete="email" value="{{ old('email') }}" autofocus />
        </div>
        <div class="form-group">
            <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                   type="password" placeholder="Parola" name="password" autocomplete="password" />
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
                <span></span>Beni Hatırla</label>
            </div>
            <a href="{{ route(config('app.panel_prefix') . 'password.request') }}" class="text-white font-weight-bold">Parolamı Unuttum ?</a>
        </div>
        <div class="form-group text-center mt-10">
            <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Giriş Yap</button>
        </div>
    </form>
@endsection
