<?php

namespace App\Http\Livewire\Backend;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $tags;
    public $categories;
    public $users;
    public $posts;
    public function mount()
    {

        $this->tags = Tag::count();
        $this->categories = Category::count();
        $this->posts = Post::count();
        $this->users = User::count();
    }
    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
