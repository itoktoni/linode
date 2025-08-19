<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use WireUi\View\WireUiComponent;

class Notif extends WireUiComponent
{
    protected array $packs = ['position'];

    protected array $props = [
        'z-index' => null,
    ];

    public function blade(): View
    {
        return view('livewire.notif');
    }

    // public function render()
    // {
    //     return view('livewire.notif');
    // }
}
