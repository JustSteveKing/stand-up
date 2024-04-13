<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Membership;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class MembershipFactory extends Factory
{
    /** @var class-string<Model>  */
    protected $model = Membership::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'role' => $this->faker->randomElement(
                array: ['editor','admin'],
            ),
            'team_id' => Team::factory(),
            'user_id' => User::factory(),
        ];
    }
}
