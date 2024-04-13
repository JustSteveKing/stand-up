<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

final class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * @param User $user
     * @param array<string,mixed> $input
     * @throws ValidationException
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email) {
            $this->updateVerifiedUser($user, $input);

            return;
        }

        $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
        ]);
    }

    /**
     * @param User $user
     * @param array<string,string> $input
     */
    private function updateVerifiedUser(User $user, array $input): void
    {
        $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ]);

        $user->sendEmailVerificationNotification();
    }
}
