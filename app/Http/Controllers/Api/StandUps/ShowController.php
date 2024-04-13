<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\Http\Resources\Api\StandUpResource;
use App\Http\Responses\ModelResponse;
use App\Repositories\StandUpRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

final readonly class ShowController
{
    public function __construct(
        private AuthManager $auth,
        private StandUpRepository $repository,
    ) {
    }

    public function __invoke(Request $request, string $uuid): ModelResponse
    {
        // authorization

        $standup = $this->repository->find(
            uuid: $uuid,
        );

        return new ModelResponse(
            data: new StandUpResource(
                resource: $standup,
            ),
        );
    }
}
