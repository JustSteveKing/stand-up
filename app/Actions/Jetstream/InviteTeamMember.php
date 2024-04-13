<?php

declare(strict_types=1);

namespace App\Actions\Jetstream;

use App\Models\Team;
use App\Models\User;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Validation\Rule as RuleContract;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Jetstream\Contracts\InvitesTeamMembers;
use Laravel\Jetstream\Events\InvitingTeamMember;
use Laravel\Jetstream\Jetstream;
use Laravel\Jetstream\Mail\TeamInvitation;
use Laravel\Jetstream\Rules\Role;

final class InviteTeamMember implements InvitesTeamMembers
{
    /**
     * @param User $user
     * @param Team $team
     * @param string $email
     * @param string|null $role
     * @return void
     * @throws AuthorizationException
     */
    public function invite(User $user, Team $team, string $email, ?string $role = null): void
    {
        Gate::forUser($user)->authorize('addTeamMember', $team);

        $this->validate($team, $email, $role);

        InvitingTeamMember::dispatch($team, $email, $role);

        $invitation = $team->teamInvitations()->create([
            'email' => $email,
            'role' => $role,
        ]);

        Mail::to($email)->send(new TeamInvitation($invitation));
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
        ], $this->rules($team), [
            'email.unique' => __('This user has already been invited to the team.'),
        ])->after(
            $this->ensureUserIsNotAlreadyOnTeam($team, $email)
        )->validateWithBag('addTeamMember');
    }

    /**
     * @return array<string,RuleContract|array|string>
     */
    private function rules(Team $team): array
    {
        return array_filter([
            'email' => [
                'required', 'email',
                Rule::unique('team_invitations')->where(function (Builder $query) use ($team): void {
                    $query->where('team_id', $team->id);
                }),
            ],
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
