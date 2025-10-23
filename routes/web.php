<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteUrlGenerator;
use App\Http\Controllers\BoutiqueController;




Route::get('/', [BoutiqueController::class,'index'])->name('boutique.index');
Route::get('/detail/{id}', [BoutiqueController::class,'show'])->name('boutique.show');
