<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/armors', function () {
    return view('armors');
});

Route::get('/armors/edit/{armor}', function ($armor) {
    return view('armorsEdit');
});

Route::get('/armors/delete/{armor}', function ($armor) {
    return view('armorsDelete');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/items/edit/{item}', function ($item) {
    return view('itemsEdit');
});

Route::get('/items/delete/{item}', function ($item) {
    return view('itemsDelete');
});

