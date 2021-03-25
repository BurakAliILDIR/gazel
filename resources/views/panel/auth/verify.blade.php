@extends('layouts.app')

@section('content')
    <div class="mb-20">
        <h4>Email adresinizi doğrulayın</h4>
        <p class="opacity-60">Parolanızı sıfırlamak için e-postanızı giriniz</p>
    </div>

    @if (session('resent'))
        <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
            <div class="alert-icon"><i class="flaticon2-information"></i></div>
            <div class="alert-text">
                E-posta adresinize yeni bir doğrulama bağlantısı gönderildi. E-postayı almadıysanız;
            </div>
        </div>
    @endif

    <form class="form" method="POST" action="{{ route(config('app.panel_prefix') . 'verification.resend') }}">
       @csrf

        <div class="form-group">
            <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Başka bir tane istemek için burayı tıklayın</button>
        </div>

    </form>
@endsection
