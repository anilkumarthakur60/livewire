<?php

namespace App\Http\Livewire;

use App\View\Components\BaseLayout;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        return view('livewire.user-list')->layout(BaseLayout::class);
    }
}
