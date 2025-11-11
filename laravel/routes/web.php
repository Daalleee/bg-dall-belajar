<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'index']);
Route::get('/create', [ProdukController::class, 'create']);
