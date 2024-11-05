<?php

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//ArmorRoutes
Route::get('/armors', ArmorController::class, 'read');
Route::get('/armor/create', ArmorController::class, 'create');
Route::get('/armors/edit/{armor}', ArmorController::class, 'update');
Route::get('/armors/delete/{armor}', ArmorController::class, 'delete');

//ItemRoutes
Route::get('/items', ItemController::class, 'read');
Route::get('/items/create', ItemController::class, 'create');
Route::get('/items/edit/{item}', ItemController::class, 'update');
Route::get('/items/delete/{item}', ItemController::class, 'delete');

