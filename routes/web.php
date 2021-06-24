<?php

	use App\Models\Sss;
	use Illuminate\Support\Facades\Route;

	Route::get('/', function () {
//        return (Sss::query()->first()->locale('name'));
        return view('welcome');
    });


	Route::get('/deneme', function () {
//        return (Sss::query()->first()->locale('name'));
        return view('welcome');
    });


