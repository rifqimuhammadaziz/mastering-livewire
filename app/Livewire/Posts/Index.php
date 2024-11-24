<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy]
#[Title('Posts')]
class Index extends Component
{
    #[On('postCreated')]
    public function refresh($post)
    {

    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(3);
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
