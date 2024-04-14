<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\StandUps;

use App\Enums\Mood;
use App\Exceptions\Api\StandUps\FailedToCreateStandUp;
use App\Http\Requests\Api\StandUps\StoreRequest;
use App\Http\Resources\Api\StandUpResource;
use App\Http\Responses\ModelResponse;
use App\Models\StandUp;
use App\Repositories\StandUpRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use JustSteveKing\Tools\Http\Enums\Status;
use Knuckles\Scribe\Attributes\Authenticated;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\ResponseFromApiResource;
use Throwable;

#[
    Authenticated,
    Group(name: 'Stand Ups', description: 'A series of endpoints that allow programmatic access to managing stand-ups.', authenticated: true),
    Endpoint(title: 'Create a new Stand Up', description: 'Create a new Stand Up for a specified department, will be assigned to whichever user is authenticated at the time.'),

    BodyParam(name: 'mood', type: 'string', description: 'The mood of the user to be submitted to the stand-up.', required: true, example: 'neutral', enum: Mood::class),
    BodyParam(name: 'tasks', type: 'string', description: 'The list of tasks the user is planning on working on today. Markdown is supported.', required: false, example: 'Today I will be working on the OpenAPI Specification.'),
    BodyParam(name: 'blockers', type: 'string', description: 'A list of things that are blocking the user from progressing. Markdown is supported.', required: false, example: 'I am currently being blocked by front-end playing with crayons.'),
    BodyParam(name: 'questions', type: 'string', description: 'A list of questions that the user wants information on, these could be anything. Markdown is supported.', required: false, example: 'How much wood, could a woodchuck chuck, if a woodchuck, could chuck wood.'),
    BodyParam(name: 'comments', type: 'string', description: 'Any comments that the user wants to add to their stand-up that may be useful.', required: false, example: 'Going to the Dentist at 2pm, will make up hours later.'),
    BodyParam(name: 'department', type: 'string', description: 'The Unique Identifier for the department that the user is adding their stand up to.', required: true, example: '1234-1234-1234-1234'),

    ResponseFromApiResource(StandUpResource::class, StandUp::class, collection: false)
]
final readonly class StoreController
{
    /**
     * @param AuthManager $auth
     * @param StandUpRepository $repository
     */
    public function __construct(
        private AuthManager $auth,
        private StandUpRepository $repository,
    ) {
    }

    /**
     * @param StoreRequest $request
     * @return ModelResponse
     * @throws FailedToCreateStandUp
     */
    public function __invoke(StoreRequest $request): ModelResponse
    {
        // authorization
        if ( ! Gate::allows('create')) {
            throw new UnauthorizedException();
        }

        try {
            $standup = $this->repository->new(
                data: $request->payload(),
                user: $this->auth->id(),
            );
        } catch (Throwable $exception) {
            throw new FailedToCreateStandUp(
                message: 'Failed to create standup.',
                previous: $exception,
            );
        }

        return new ModelResponse(
            data: new StandUpResource(
                resource: $standup,
            ),
            status: Status::CREATED,
        );
    }
}
