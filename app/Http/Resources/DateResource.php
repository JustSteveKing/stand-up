<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Carbon\CarbonInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property CarbonInterface $resource
 */
final class DateResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'human' => $this->resource?->diffForHumans(),
            'timestamp' => $this->resource?->timestamp,
            'string' => $this->resource?->toDateTimeString(),
            'local' => $this->resource?->toDateTimeLocalString(),
        ];
    }
}
