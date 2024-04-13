<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Sidebar extends Component
{
    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.sidebar',
        );
    }
}
