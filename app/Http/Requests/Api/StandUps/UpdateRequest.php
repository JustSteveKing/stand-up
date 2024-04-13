<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\StandUps;

use App\Enums\Mood;
use App\Http\Payloads\Api\NewStandUp;
use App\Models\Department;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class UpdateRequest extends FormRequest
{
    /** @return array<string, ValidationRule|array|string> */
    public function rules(): array
    {
        return [
            'mood' => [
                'required',
                Rule::enum(
                    type: Mood::class,
                ),
            ],
            'tasks' => [
                'required',
                'string',
                'min:2',
            ],
            'blockers' => [
                'nullable',
                'string',
                'min:2',
            ],
            'questions' => [
                'nullable',
                'string',
                'min:2',
            ],
            'comments' => [
                'nullable',
                'string',
                'min:2',
            ],
            'department' => [
                'required',
                Rule::exists(
                    table: Department::class,
                    column: 'id',
                ),
            ],
        ];
    }

    public function payload(): NewStandUp
    {
        return new NewStandUp(
            mood: Mood::from(
                value: $this->string('mood')->toString(),
            ),
            tasks: $this->string('tasks')->toString(),
            blockers: $this->has('blockers')
                ? $this->string('blockers')->toString()
                : null,
            questions: $this->has('questions')
                ? $this->string('questions')->toString()
                : null,
            comments: $this->has('comments')
                ? $this->string('comments')->toString()
                : null,
            department: $this->string('department')->toString(),
        );
    }
}
