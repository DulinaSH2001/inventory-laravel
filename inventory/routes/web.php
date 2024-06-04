<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/',[ItemController::class,'index'])->name('index');
Route::get('/add',[ItemController::class,'add'])->name('addItem');
Route::get('/{id}/delete',[ItemController::class,'delete'])->name('deleteItem');
Route::get('/{id}/update',[ItemController::class,'update'])->name('updateItem');
Route::get('/{id}/details',[ItemController::class,'details'])->name('itemDetails');
Route::post('/insert',[ItemController::class,'insert'])->name('insertItem');
Route::post('/edit/{id}', [ItemController::class, 'edit'])->name('editItem');
Route::get('/view/{id}', [ItemController::class, 'view'])->name('viewItem');