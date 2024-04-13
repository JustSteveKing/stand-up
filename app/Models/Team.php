<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\Team as JetstreamTeam;

/**
 * @property string $id
 * @property string $name
 * @property null|string $logo
 * @property string $user_id
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property User $owner
 * @property Collection<Department> $departments
 */
final class Team extends JetstreamTeam
{
    use HasFactory;
    use HasUuids;

    /** @var array<int,string>  */
    protected $fillable = [
        'name',
        'logo',
        'user_id',
    ];

    /** @var array<string,class-string>  */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    /** @return BelongsTo */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    /** @return HasMany */
    public function departments(): HasMany
    {
        return $this->hasMany(
            related: Department::class,
            foreignKey: 'team_id',
        );
    }
}
