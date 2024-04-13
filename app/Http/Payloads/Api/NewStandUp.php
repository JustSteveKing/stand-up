<?php

declare(strict_types=1);

namespace App\Http\Payloads\Api;

use App\Enums\Mood;

final readonly class NewStandUp
{
    /**
     * @param Mood $mood
     * @param string $tasks
     * @param string|null $blockers
     * @param string|null $questions
     * @param string|null $comments
     * @param string $department
     */
    public function __construct(
        public Mood $mood,
        public string $tasks,
        public null|string $blockers,
        public null|string $questions,
        public null|string $comments,
        public string $department,
    ) {
    }

    /**
     * @param array{
     *     mood:Mood,
     *     tasks:string,
     *     blockers:null|string,
     *     questions:null|string,
     *     comments:null|string,
     *     department:string,
     * } $data
     * @return NewStandUp
     */
    public static function make(array $data): NewStandUp
    {
        return new NewStandUp(
            mood: $data['mood'],
            tasks: $data['tasks'],
            blockers: $data['blockers'],
            questions: $data['questions'],
            comments: $data['comments'],
            department: $data['department'],
        );
    }

    /**
     * @return array{
     *     mood:Mood,
     *     tasks:string,
     *     blockers:null|string,
     *     questions:null|string,
     *     comments:null|string,
     *     department_id:string
     * }
     */
    public function toArray(): array
    {
        return [
            'mood' => $this->mood,
            'tasks' => $this->tasks,
            'blockers' => $this->blockers,
            'questions' => $this->questions,
            'comments' => $this->comments,
            'department_id' => $this->department,
        ];
    }
}
