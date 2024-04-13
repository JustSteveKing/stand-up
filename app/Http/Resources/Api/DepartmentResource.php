<?php

declare(strict_types=1);

namespace App\Http\Resources\Api;

use App\Models\Department;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property Department $resource
 */
final class DepartmentResource extends JsonApiResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->resource->name,
            'color' => $this->resource->color,
        ];
    }

    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toRelationships(Request $request): array
    {
        return [
            'team' => new TeamResource(
                resource: $this->whenLoaded(
                    relationship: 'team',
                ),
            ),
        ];
    }
}
