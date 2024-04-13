<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->group(static function (): void {
    Route::prefix('standups')->as('standups:')->group(
        base_path('routes/api/stand-ups.php'),
    );
});
