<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\Http\Resources\Api\StandUpResource;
use App\Http\Responses\CollectionResponse;
use App\Models\StandUp;
use App\Repositories\StandUpRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use JustSteveKing\Tools\Http\Enums\Status;
use Knuckles\Scribe\Attributes\Authenticated;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\ResponseFromApiResource;

#[Group(name: 'Stand Ups', description: 'A series of endpoints that allow programatic access to managing stand-ups.', authenticated: true)]
final readonly class IndexController
{
    public function __construct(
        private AuthManager $auth,
        private StandUpRepository $repository,
    ) {
    }

    #[Authenticated]
    #[ResponseFromApiResource(StandUpResource::class, StandUp::class, collection: true)]
    #[Endpoint(title: 'Browse Stand Ups', description: 'Browse through the stand-ups that belong to your team, no matter what department you are in.')]
    public function __invoke(Request $request): CollectionResponse
    {
        $standups = $this->repository->forTeam(
            team: $this->auth->user()->current_team_id,
        );

        return new CollectionResponse(
            data: StandUpResource::collection(
                resource: $standups->paginate(),
            ),
        );
    }
}
