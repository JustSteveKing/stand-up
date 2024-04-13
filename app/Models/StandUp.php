<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Mood;
use Carbon\CarbonInterface;
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

    /** @return array<string,class-string> */
    protected function casts(): array
    {
        return [
            'mood' => Mood::class,
        ];
    }
}
