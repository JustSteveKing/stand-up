<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\Enums\Mood;
use App\Http\Resources\Api\StandUpResource;
use App\Http\Responses\CollectionResponse;
use App\Models\StandUp;
use App\Repositories\StandUpRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Authenticated;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\ResponseFromApiResource;
use Spatie\QueryBuilder\QueryBuilder;

#[
    Authenticated,
    Group(name: 'Stand Ups', description: 'A series of endpoints that allow programmatic access to managing stand-ups.', authenticated: true),
    QueryParam(name: 'filter[mood]', type: 'string', description: 'Filter the results by mood', required: false, example: 'filter[mood]=neutral', enum: Mood::class),
    QueryParam(name: 'filter[name]', type: 'string', description: 'Filter the results by the users name', required: false, example: 'filter[mood]=Rumpelstiltskin'),
    QueryParam(name: 'filter[department]', type: 'string', description: 'Filter the results by the department name', required: false, example: 'Engineering'),
    QueryParam(name: 'include', type: 'string', description: 'A comma separated list of relationships to side-load', required: false, example: 'include=user,department.team'),
    QueryParam(name: 'sort', type: 'string', description: 'Sort the results based on either the mood, or the created_at', required: false, example: 'sort=-mood'),
    ResponseFromApiResource(StandUpResource::class, StandUp::class, collection: true),
    Endpoint(title: 'Browse Stand Ups', description: 'Browse through the stand-ups that belong to your team, no matter what department you are in.')
]
final readonly class IndexController
{
    /**
     * @param AuthManager $auth
     * @param StandUpRepository $repository
     */
    public function __construct(
        private AuthManager $auth,
        private StandUpRepository $repository,
    ) {
    }

    /**
     * @param Request $request
     * @return CollectionResponse
     */
    public function __invoke(Request $request): CollectionResponse
    {
        $standups = QueryBuilder::for(
            subject: $this->repository->forTeam(
                team: $this->auth->user()->current_team_id,
            ),
        )->allowedFilters(
            filters: $this->repository->filters(),
        )->allowedIncludes(
            includes: $this->repository->includes(),
        )->allowedSorts(
            sorts: $this->repository->sort(),
        )->getEloquentBuilder();

        return new CollectionResponse(
            data: StandUpResource::collection(
                resource: $standups->paginate(),
            ),
        );
    }
}
