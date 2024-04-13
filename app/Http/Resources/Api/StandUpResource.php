<?php

declare(strict_types=1);

namespace App\Http\Resources\Api;

use App\Http\Resources\DateResource;
use App\Models\StandUp;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property StandUp $resource
 */
final class StandUpResource extends JsonApiResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toAttributes(Request $request): array
    {
        return [
            'mood' => $this->resource->mood,
            'tasks' => $this->resource->tasks,
            'blockers' => $this->resource->blockers,
            'questions' => $this->resource->questions,
            'comments' => $this->resource->comments,
            'created' => new DateResource(
                resource: $this->resource->created_at,
            ),
        ];
    }

    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toRelationships(Request $request): array
    {
        return [
            'department' => new DepartmentResource(
                resource: $this->whenLoaded(
                    relationship: 'department',
                ),
            ),
        ];
    }
}
