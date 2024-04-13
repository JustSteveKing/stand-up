<?php

declare(strict_types=1);

namespace App\Actions\Jetstream;

use App\Models\Team;
use App\Models\User;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Jetstream\Contracts\AddsTeamMembers;
use Laravel\Jetstream\Events\AddingTeamMember;
use Laravel\Jetstream\Events\TeamMemberAdded;
use Laravel\Jetstream\Jetstream;
use Laravel\Jetstream\Rules\Role;

final class AddTeamMember implements AddsTeamMembers
{
    /**
     * @param User $user
     * @param Team $team
     * @param string $email
     * @param string|null $role
     * @return void
     * @throws AuthorizationException
     */
    public function add(User $user, Team $team, string $email, ?string $role = null): void
    {
        Gate::forUser($user)->authorize('addTeamMember', $team);

        $this->validate($team, $email, $role);

        $newTeamMember = Jetstream::findUserByEmailOrFail($email);

        AddingTeamMember::dispatch($team, $newTeamMember);

        $team->users()->attach(
            $newTeamMember,
            ['role' => $role]
        );

        TeamMemberAdded::dispatch($team, $newTeamMember);
    }

    /**
     * @param Team $team
     * @param string $email
     * @param string|null $role
     * @return void
     * @throws ValidationException
     */
    private function validate(Team $team, string $email, ?string $role): void
    {
        Validator::make([
            'email' => $email,
            'role' => $role,
        ], $this->rules(), [
            'email.exists' => __('We were unable to find a registered user with this email address.'),
        ])->after(
            $this->ensureUserIsNotAlreadyOnTeam($team, $email)
        )->validateWithBag('addTeamMember');
    }

    /**
     * @return array<string,Rule|array|string>
     */
    private function rules(): array
    {
        return array_filter([
            'email' => ['required', 'email', 'exists:users'],
            'role' => Jetstream::hasRoles()
                ? ['required', 'string', new Role()]
                : null,
        ]);
    }

    /**
     * @param Team $team
     * @param string $email
     * @return Closure
     */
    private function ensureUserIsNotAlreadyOnTeam(Team $team, string $email): Closure
    {
        return static function ($validator) use ($team, $email): void {
            $validator->errors()->addIf(
                $team->hasUserWithEmail($email),
                'email',
                __('This user already belongs to the team.')
            );
        };
    }
}
