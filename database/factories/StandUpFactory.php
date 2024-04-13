<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Department;
use App\Models\StandUp;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class StandUpFactory extends Factory
{
    /** @var class-string<Model>  */
    protected $model = StandUp::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'mood' => 'awesome',
            'tasks' => $this->faker->realText(),
            'blockers' => $this->faker->realText(),
            'questions' => $this->faker->realText(),
            'department_id' => Department::factory(),
            'user_id' => User::factory(),
        ];
    }
}
