<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteUrlGenerator;
use App\Http\Controllers\BoutiqueController;




Route::get('/', [BoutiqueController::class,'index'])->name('boutique.index');

