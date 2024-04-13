<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

final class Header extends Component
{
    #[Computed]
    public function user(): User|Authenticatable
    {
        return auth()->user();
    }

    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.header',
        );
    }
}
