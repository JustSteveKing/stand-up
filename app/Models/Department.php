<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $id
 * @property string $name
 * @property null|string $color
 * @property string $team_id
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property Team $team
 * @property Collection<StandUp> $standups
 */
final class Department extends Model
{
    use HasFactory;
    use HasUuids;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'color',
        'team_id',
    ];

    /** @return BelongsTo */
    public function team(): BelongsTo
    {
        return $this->belongsTo(
            related: Team::class,
            foreignKey: 'team_id',
        );
    }

    /** @return HasMany */
    public function standups(): HasMany
    {
        return $this->hasMany(
            related: Standup::class,
            foreignKey: 'department_id',
        );
    }
}
