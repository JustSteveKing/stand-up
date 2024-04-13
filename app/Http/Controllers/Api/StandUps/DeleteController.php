<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\DTOs\ApiMessage;
use App\Http\Responses\MessageResponse;
use App\Models\StandUp;
use App\Repositories\StandUpRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use JustSteveKing\Tools\Http\Enums\Status;

final readonly class DeleteController
{
    public function __construct(
        private StandUpRepository $repository,
    ) {
    }

    public function __invoke(Request $request, StandUp $standUp): MessageResponse
    {
        if ( ! Gate::allows('delete', $standUp)) {
            throw new UnauthorizedException();
        }

        $this->repository->delete(
            standUp: $standUp,
        );

        return new MessageResponse(
            message: new ApiMessage(
                message: 'Stand up has been removed.',
                status: $status = Status::ACCEPTED,
                success: true,
            ),
            status: $status,
        );
    }
}
