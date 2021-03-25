<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    Auth::routes(['register' => FALSE, 'verify' => FALSE]);

    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('panel.dashboard');
        });
    });
