<?php

declare(strict_types=1);

namespace App\Actions\Jetstream;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;
use Laravel\Jetstream\Contracts\RemovesTeamMembers;
use Laravel\Jetstream\Events\TeamMemberRemoved;

final class RemoveTeamMember implements RemovesTeamMembers
{
    /**
     * @param User $user
     * @param Team $team
     * @param User $teamMember
     * @return void
     * @throws AuthorizationException|ValidationException
     */
    public function remove(User $user, Team $team, User $teamMember): void
    {
        $this->authorize($user, $team, $teamMember);

        $this->ensureUserDoesNotOwnTeam($teamMember, $team);

        $team->removeUser($teamMember);

        TeamMemberRemoved::dispatch($team, $teamMember);
    }

    /**
     * @param User $user
     * @param Team $team
     * @param User $teamMember
     * @return void
     * @throws AuthorizationException
     */
    private function authorize(User $user, Team $team, User $teamMember): void
    {
        if ($user->id !== $teamMember->id && ! Gate::forUser($user)->check('removeTeamMember', $team)) {
            throw new AuthorizationException();
        }
    }

    /**
     * @param User $teamMember
     * @param Team $team
     * @return void
     * @throws ValidationException
     */
    private function ensureUserDoesNotOwnTeam(User $teamMember, Team $team): void
    {
        if ($teamMember->id === $team->owner->id) {
            throw ValidationException::withMessages([
                'team' => [__('You may not leave a team that you created.')],
            ])->errorBag('removeTeamMember');
        }
    }
}
