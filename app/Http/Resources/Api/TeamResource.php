<?php

declare(strict_types=1);

namespace App\Http\Resources\Api;

use App\Models\Team;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property Team $resource
 */
final class TeamResource extends JsonApiResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->resource->name,
            'logo' => $this->resource->logo,
        ];
    }

    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toRelationships(Request $request): array
    {
        return [
            'owner' => new UserResource(
                resource: $this->whenLoaded(
                    relationship: 'owner',
                ),
            ),
        ];
    }
}
