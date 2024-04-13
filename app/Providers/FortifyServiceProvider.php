<?php

declare(strict_types=1);

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

final class FortifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerViews();
        $this->registerActions();
    }

    protected function registerViews(): void
    {
        Fortify::loginView(
            view: 'pages.auth.login',
        );
        Fortify::registerView(
            view: 'pages.auth.register',
        );
        Fortify::confirmPasswordView(
            view: 'pages.auth.passwords.confirm',
        );
        Fortify::requestPasswordResetLinkView(
            view: 'pages.auth.passwords.reset',
        );
        Fortify::resetPasswordView(
            view: 'pages.auth.passwords.reset-password',
        );
        Fortify::twoFactorChallengeView(
            view: 'pages.auth.two-factor-challenge',
        );
        Fortify::verifyEmailView(
            view: 'pages.auth.email.verify',
        );
    }

    protected function registerActions(): void
    {
        Fortify::createUsersUsing(
            callback: CreateNewUser::class,
        );
        Fortify::updateUserProfileInformationUsing(
            callback: UpdateUserProfileInformation::class,
        );
        Fortify::updateUserPasswordsUsing(
            callback: UpdateUserPassword::class,
        );
        Fortify::resetUserPasswordsUsing(
            callback: ResetUserPassword::class,
        );
    }
}
