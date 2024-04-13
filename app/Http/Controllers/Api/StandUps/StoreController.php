<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\Exceptions\Api\StandUps\FailedToCreateStandUp;
use App\Http\Requests\Api\StandUps\StoreRequest;
use App\Http\Resources\Api\StandUpResource;
use App\Http\Responses\ModelResponse;
use App\Repositories\StandUpRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use JustSteveKing\Tools\Http\Enums\Status;
use Throwable;

final readonly class StoreController
{
    public function __construct(
        private AuthManager $auth,
        private StandUpRepository $repository,
    ) {
    }

    /**
     * @param StoreRequest $request
     * @return ModelResponse
     * @throws FailedToCreateStandUp
     */
    public function __invoke(StoreRequest $request): ModelResponse
    {
        // authorization
        if ( ! Gate::allows('create')) {
            throw new UnauthorizedException();
        }

        try {
            $standup = $this->repository->new(
                data: $request->payload(),
                user: $this->auth->id(),
            );
        } catch (Throwable $exception) {
            throw new FailedToCreateStandUp(
                message: 'Failed to create standup.',
                previous: $exception,
            );
        }

        return new ModelResponse(
            data: new StandUpResource(
                resource: $standup,
            ),
            status: Status::CREATED,
        );
    }
}
