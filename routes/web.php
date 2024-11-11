<?php

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//ArmorRoutes
Route::get('/armors', [ArmorController::class, 'read'])->name('readArmor');
Route::get('/armors/create', [ArmorController::class, 'create'])->name('createArmor');
Route::post('/armors', [ArmorController::class, 'store'])->name('storeArmor');
Route::get('/armors/update', [ArmorController::class, 'update'])->name('updateArmor');
Route::get('/armors/delete/{id}', [ArmorController::class, 'delete'])->name('deleteArmor');
Route::delete('/armors/{id}', [ArmorController::class, 'destroy'])->name('destroyArmor');

//ItemRoutes
Route::get('/items', [ItemController::class, 'read'])->name('readItems');
Route::get('/items/create', [ItemController::class, 'create'])->name('createItems');
Route::post('/items', [ItemController::class, 'store'])->name('storeItems');
Route::get('/items/update/{id}', [ItemController::class, 'update'])->name('udpateItems');
Route::put('/items/{id}', [ItemController::class, 'confirmUpdate']);
Route::get('/items/delete/{id}', [ItemController::class, 'delete'])->name('deleteItems');
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('destroyItem');

