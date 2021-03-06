<?php

use App\Http\Controllers\LaravelVersionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaravelVersionsController::class, 'index'])->name('versions.index');
Route::get('{version}', [LaravelVersionsController::class, 'show'])->name('versions.show');
