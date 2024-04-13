<?php

declare(strict_types=1);

namespace App\DTOs;

use JustSteveKing\Tools\Http\Enums\Status;

final class ApiMessage
{
    /**
     * @param string $message
     * @param Status $status
     * @param bool $success
     */
    public function __construct(
        private string $message,
        private Status $status = Status::OK,
        private bool $success = true,
    ) {
    }

    /** @return array{success:bool,message:string,status:int} */
    public function toArray(): array
    {
        return [
            'success' => $this->success,
            'message' => $this->message,
            'status' => $this->status->value,
        ];
    }
}
