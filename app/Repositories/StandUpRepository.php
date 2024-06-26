<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Payloads\Api\NewStandUp;
use App\Models\StandUp;
use App\Models\Team;

use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;
use function array_merge;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Throwable;

final readonly class StandUpRepository
{
    /**
     * @param DatabaseManager $database
     */
    public function __construct(
        private DatabaseManager $database,
    ) {
    }

    public function delete(StandUp $standUp): mixed
    {
        return $this->database->transaction(
            callback: fn () => $standUp->delete(),
            attempts: 3,
        );
    }

    /**
     * @param NewStandUp $data
     * @param StandUp $standUp
     * @return bool
     * @throws Throwable
     */
    public function update(NewStandUp $data, StandUp $standUp): bool
    {
        return (bool) $this->database->transaction(
            callback: fn () => (bool) $standUp->update(
                attributes: $data->toArray(),
            ),
            attempts: 3,
        );
    }

    public function find(string $uuid): Model|Builder
    {
        return $this->query()->where(
            column: 'id',
            value: $uuid,
        )->firstOrFail();
    }

    /**
     * @param NewStandUp $data
     * @param string $user
     * @return Model|StandUp
     * @throws Throwable
     */
    public function new(NewStandUp $data, string $user): Model|StandUp
    {
        return $this->database->transaction(
            callback: fn () => $this->query()->create(
                attributes: array_merge(
                    $data->toArray(),
                    [
                        'user_id' => $user,
                    ]
                ),
            ),
            attempts: 3,
        );
    }

    /**
     * @param Team $team
     * @return Builder
     */
    public function forTeam(Team $team): Builder
    {
        return $this->query()->whereHas(
            relation: 'department',
            callback: fn (Builder $builder) => $builder
                ->where('team_id', $team->id),
        );
    }

    /** @return array<int,AllowedFilter> */
    public function filters(): array
    {
        return [
            AllowedFilter::exact(name: 'mood'),
            AllowedFilter::scope(name: 'name'),
            AllowedFilter::scope('submitted'),
            AllowedFilter::scope(name: 'department'),
        ];
    }

    /** @return array<int,Collection> */
    public function includes(): array
    {
        return [
            AllowedInclude::relationship(name: 'user'),
            AllowedInclude::relationship(name: 'department'),
            AllowedInclude::relationship(name: 'department.team'),
        ];
    }

    /** @return array<int,AllowedSort> */
    public function sort(): array
    {
        return [
            AllowedSort::field(name: 'mood'),
            AllowedSort::field(name: 'created_at'),
        ];
    }

    /** @return Builder */
    public function query(): Builder
    {
        return StandUp::query();
    }
}
