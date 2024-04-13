<?php

declare(strict_types=1);

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

final class JetstreamServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureActions();
        $this->configurePermissions();
    }

    protected function configureActions(): void
    {
        Jetstream::createTeamsUsing(
            class: CreateTeam::class,
        );
        Jetstream::updateTeamNamesUsing(
            class: UpdateTeamName::class,
        );
        Jetstream::addTeamMembersUsing(
            class: AddTeamMember::class,
        );
        Jetstream::inviteTeamMembersUsing(
            class: InviteTeamMember::class,
        );
        Jetstream::removeTeamMembersUsing(
            class: RemoveTeamMember::class,
        );
        Jetstream::deleteTeamsUsing(
            class: DeleteTeam::class,
        );
        Jetstream::deleteUsersUsing(
            class: DeleteUser::class,
        );
    }

    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('editor', 'Editor', [
            'read',
            'create',
            'update',
        ])->description('Editor users have the ability to read, create, and update.');
    }
}
