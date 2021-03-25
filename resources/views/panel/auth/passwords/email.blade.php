@extends('panel.auth.layouts.app')

@section('content')
        <div class="mb-20">
            <h4>Parolamı Unuttum ?</h4>
            <p class="opacity-60">Parolanızı sıfırlamak için e-postanızı giriniz</p>
        </div>

        @if(session()->has('status'))
            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon2-information"></i></div>
                    <div class="alert-text">
                        {!! session()->get('status') !!}
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
        @endif

        @component('panel.components.alert.validation-errors')@endcomponent

        <form class="form" method="POST" action="{{ route(config('app.panel_prefix') . 'password.email') }}">
            @csrf

            <div class="form-group mb-10">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="E-posta" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

            </div>
            <div class="form-group">
                <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Parola Sıfırlama Maili Gönder</button>
                <a href="{{ route(config('app.panel_prefix') . 'login') }}" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Geri Dön</a>
            </div>
        </form>
@endsection
