<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\DTOs\ApiMessage;
use App\Exceptions\Api\StandUps\FailedToUpdateStandUp;
use App\Http\Requests\Api\StandUps\UpdateRequest;
use App\Http\Responses\MessageResponse;
use App\Models\StandUp;
use App\Repositories\StandUpRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use JustSteveKing\Tools\Http\Enums\Status;
use Throwable;

final readonly class UpdateController
{
    public function __construct(
        private StandUpRepository $repository,
    ) {
    }

    /**
     * @param UpdateRequest $request
     * @param StandUp $standUp
     * @return MessageResponse
     * @throws FailedToUpdateStandUp
     * @throws Throwable
     */
    public function __invoke(UpdateRequest $request, StandUp $standUp): MessageResponse
    {
        if ( ! Gate::allows('update', $standUp)) {
            throw new UnauthorizedException();
        }

        if ( ! $this->repository->update(data: $request->payload(), standUp: $standUp)) {
            throw new FailedToUpdateStandUp(
                message: 'Failed to update stand-up',
            );
        }

        return new MessageResponse(
            message: new ApiMessage(
                message: 'Stand-up updated successfully',
                status: Status::ACCEPTED,
                success: true,
            ),
        );
    }
}
