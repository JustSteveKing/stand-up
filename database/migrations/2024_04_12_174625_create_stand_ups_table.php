<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('stand_ups', static function (Blueprint $table): void {
            $table->uuid('id')->primary();

            $table->string('mood');

            $table->text('tasks');
            $table->text('blockers')->nullable();
            $table->text('questions')->nullable();

            $table
                ->foreignUuid('department_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table
                ->foreignUuid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stand_ups');
    }
};
