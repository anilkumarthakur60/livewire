<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeadSection extends Component
{
    public $categories;
    public function mount()
    {

        $this->categories = Category::where('category_id', null)->with('childrens')->withCount('childrens')->get();
    }

    public function render()
    {
        return view('livewire.head-section');
    }
}
