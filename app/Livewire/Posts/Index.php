<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class Index extends Component
{
    #[On('postCreated')]
    public function refresh($post)
    {

    }

    public function render()
    {
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
