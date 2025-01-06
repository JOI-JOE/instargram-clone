<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Home extends Component
{
    public $posts;

    function mount()
    {
        $this->posts = Post::query()->latest()->get();
    }
    public function render()
    {
        return view('livewire.home');
    }
}
