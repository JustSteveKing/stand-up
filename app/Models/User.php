<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property null|string $remember_token
 * @property null|string $profile_photo_path
 * @property null|string $two_factor_secret
 * @property null|string $two_factor_recovery_codes
 * @property null|string $current_team_id
 * @property null|CarbonInterface $two_factor_confirmed_at
 * @property null|CarbonInterface $email_verified_at
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property null|CarbonInterface $deleted_at
 * @property Collection<StandUp> $standups
 */
final class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use HasUuids;
    use Notifiable;
    use SoftDeletes;
    use TwoFactorAuthenticatable;

    /** @var array<int,string>  */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'profile_photo_path',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'current_team_id',
        'two_factory_confirmed_at',
        'email_verified_at',
    ];

    /** @var array<int,string>  */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /** @var array<int,string>  */
    protected $appends = [
        'profile_photo_url',
    ];

    /** @return HasMany */
    public function standups(): HasMany
    {
        return $this->hasMany(
            related: Standup::class,
            foreignKey: 'user_id',
        );
    }

    /** @return array<string,string> */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
