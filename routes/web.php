<?php

    use App\Models\Slider;
    use Illuminate\Support\Facades\Route;


    Route::get('/3', function () {
        return (Slider::query()->first()['name']['tr']);
        return view('panel.layouts.app');
    });
    Route::domain('{locale}.' . config('app.url'))->middleware(['locale'])->group(function () {
        Route::get('/', function () {
            dd(Slider::query()->first()['name']['tr']);
            return view('panel.layouts.app');
        });

    });

