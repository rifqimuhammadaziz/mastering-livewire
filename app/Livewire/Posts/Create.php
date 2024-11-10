<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
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
        $this->form->store();
    }
}
