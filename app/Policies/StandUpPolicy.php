<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\StandUp;
use App\Models\User;

final class StandUpPolicy
{
    public function create(User $user): bool
    {
        return null !== $user->email_verified_at;
    }

    public function update(User $user, StandUp $standUp): bool
    {
        return $standUp->user_id === $user->id;
    }

    public function delete(User $user, StandUp $standUp): bool
    {
        return $standUp->user_id === $user->id;
    }
}
