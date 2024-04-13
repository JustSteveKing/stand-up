<?php

declare(strict_types=1);

namespace App\Http\Resources\Api;

use App\Models\User;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property User $resource
 */
final class UserResource extends JsonApiResource
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'avatar' => $this->resource->profile_photo_path,
        ];
    }

    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function toRelationships(Request $request): array
    {
        return [
            'teams' => TeamResource::collection(
                resource: $this->whenLoaded(
                    relationship: 'teams',
                ),
            ),
        ];
    }
}
