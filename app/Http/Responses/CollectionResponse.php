<?php

declare(strict_types=1);

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use JustSteveKing\Tools\Http\Enums\Status;
use TiMacDonald\JsonApi\JsonApiResourceCollection;

final readonly class CollectionResponse implements Responsable
{
    public function __construct(
        private JsonApiResourceCollection $data,
        private Status $status = Status::OK,
    ) {
    }

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: $this->data,
            status: $this->status->value,
            headers: [],
        );
    }
}
