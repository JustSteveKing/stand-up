<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Mood;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $id
 * @property Mood $mood
 * @property string $tasks
 * @property null|string $blockers
 * @property null|string $questions
 * @property null|string $comments
 * @property string $department_id
 * @property string $user_id
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property Department $department
 * @property User $user
 */
final class StandUp extends Model
{
    use HasFactory;
    use HasUuids;

    /** @var array<int,string> */
    protected $fillable = [
        'mood',
        'tasks',
        'blockers',
        'questions',
        'comments',
        'department_id',
        'user_id',
    ];

    /** @return BelongsTo */
    public function department(): BelongsTo
    {
        return $this->belongsTo(
            related: Department::class,
            foreignKey: 'department_id',
        );
    }

    /** @return BelongsTo */
    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    /**
     * @param Builder $builder
     * @param string $name
     * @return Builder
     */
    public function scopeDepartment(Builder $builder, string $name): Builder
    {
        return $builder->whereHas(
            relation: 'department',
            callback: fn (Builder $builder) => $builder->where(
                column: 'name',
                value: $name,
            ),
        );
    }

    /**
     * @param Builder $builder
     * @param string $name
     * @return Builder
     */
    public function scopeUser(Builder $builder, string $name): Builder
    {
        return $builder->whereHas(
            relation: 'user',
            callback: fn (Builder $builder) => $builder->where(
                column: 'name',
                value: $name,
            ),
        );
    }

    /**
     * @param Builder $builder
     * @param CarbonInterface $date
     * @return Builder
     */
    public function scopeSubmitted(Builder $builder, CarbonInterface $date): Builder
    {
        return $builder->whereBetween(
            column: 'created_at',
            values: [
                $date->startOfDay(),
                $date->endOfDay(),
            ],
        );
    }

    /** @return array<string,class-string> */
    protected function casts(): array
    {
        return [
            'mood' => Mood::class,
        ];
    }
}
