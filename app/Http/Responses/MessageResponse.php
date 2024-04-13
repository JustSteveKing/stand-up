<?php

declare(strict_types=1);

namespace App\Http\Responses;

use App\DTOs\ApiMessage;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JustSteveKing\Tools\Http\Enums\Status;

final readonly class MessageResponse implements Responsable
{
    public function __construct(
        private ApiMessage $message,
        private Status $status = Status::OK,
    ) {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: $this->message->toArray(),
            status: $this->status->value,
            headers: [],
        );
    }
}
