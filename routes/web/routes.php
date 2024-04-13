<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum','verified',config('jetstream.auth_session')])->as('pages:')->group(static function (): void {
    Route::view('/', 'pages.index')->name('home');
});
