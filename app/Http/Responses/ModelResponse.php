<?php

declare(strict_types=1);

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JustSteveKing\Tools\Http\Enums\Status;
use TiMacDonald\JsonApi\JsonApiResource;

final readonly class ModelResponse implements Responsable
{
    /**
     * @param JsonApiResource $data
     * @param Status $status
     */
    public function __construct(
        private JsonApiResource $data,
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
            data: $this->data,
            status: $this->status->value,
            headers: [],
        );
    }
}
