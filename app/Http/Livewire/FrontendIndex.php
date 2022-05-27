<?php

namespace App\Http\Livewire;

use App\View\Components\BaseLayout;
use Livewire\Component;

class FrontendIndex extends Component
{
    public function render()
    {
        return view('livewire.frontend-index')->layout(BaseLayout::class);
    }
}
