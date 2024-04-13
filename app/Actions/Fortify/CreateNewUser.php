<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

final class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * @param array<string,string> $input
     * @return User
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::query()->create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user): void {
                $this->createTeam($user);
            });
        });
    }

    /**
     * @param User $user
     * @return void
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::query()->create([
            'user_id' => $user->id,
            'name' => 'default',
        ]));
    }
}
