<?php

declare(strict_types=1);

use App\Http\Controllers\Api\StandUps;
use Illuminate\Support\Facades\Route;

Route::get('/', StandUps\IndexController::class)->name('index');
Route::post('/', StandUps\StoreController::class)->name('store');
Route::get('{uuid}', StandUps\ShowController::class)->name('show');
Route::put('{standUp}', StandUps\UpdateController::class)->name('update');
Route::delete('{standUp}', StandUps\DeleteController::class)->name('delete');
