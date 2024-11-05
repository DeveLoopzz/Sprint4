<?php

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//ArmorRoutes
Route::get('/armors', ArmorController::class, 'read');
Route::get('/armors/create', ArmorController::class, 'create');
Route::get('/armors/edit', ArmorController::class, 'update');
Route::get('/armors/delete', ArmorController::class, 'delete');

//ItemRoutes
Route::get('/items', ItemController::class, 'read');
Route::get('/items/create', ItemController::class, 'create');
Route::get('/items/edit', ItemController::class, 'update');
Route::get('/items/delete', ItemController::class, 'delete');

