<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Department;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class DepartmentFactory extends Factory
{
    /** @var class-string<Model>  */
    protected $model = Department::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'color' => $this->faker->hexColor(),
            'team_id' => Team::factory(),
        ];
    }
}
