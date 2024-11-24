<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;

    public function render(): View
    {
        return view('livewire.posts.create');
    }

    public function save(): void
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post->id);
    }
}
