<?php

namespace App\View\Components;

use App\Models\Item;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name = 'null',
        public ?string $location = 'null',
        public ?string $endsat = 'null',
        public ?string $image = 'null',
        public ?string $condition = 'null',
        public ?float $bid = 0
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-card');
    }
}
