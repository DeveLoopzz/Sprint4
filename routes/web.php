<?php

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//ArmorRoutes
Route::get('/armors', [ArmorController::class, 'read'])->name('readArmor');
Route::get('/armors/create', [ArmorController::class, 'create'])->name('createArmor');
Route::get('/armors/update', [ArmorController::class, 'update'])->name('updateArmor');
Route::get('/armors/delete', [ArmorController::class, 'delete'])->name('deleteArmor');

//ItemRoutes
Route::get('/items', [ItemController::class, 'read'])->name('readItems');
Route::get('/items/create', [ItemController::class, 'create'])->name('createItems');
Route::post('/items', [ItemController::class, 'store'])->name('storeItems');
Route::get('/items/update', [ItemController::class, 'update'])->name('udpateItems');
Route::get('/items/delete', [ItemController::class, 'delete'])->name('deleteItems');

