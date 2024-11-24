<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        Auth::user()->posts()->create(
            $this->validate()
        );

        flash('Post created successfully');

        $this->reset();
    }
}
