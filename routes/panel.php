<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    Route::domain('panel.' . config('app.url'))->middleware(['web'])->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/', function () {
                return view('panel.layouts.app');
            });
        });

    });

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes(['register' => FALSE, 'verify' => FALSE]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
