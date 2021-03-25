<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('panel.layouts.app');
    });

    Auth::routes(['register' => FALSE, 'verify' => FALSE]);

    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('panel.layouts.app');
        });
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
