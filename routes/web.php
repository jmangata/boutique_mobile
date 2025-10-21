<?php

use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;




Route::get('/', [BoutiqueController::class,'index'])->name('boutique.index');
