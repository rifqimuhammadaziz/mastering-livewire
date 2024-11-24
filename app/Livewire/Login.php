<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    public LoginForm $form;

    public function render()
    {
        return view('livewire.login');
    }

    /**
     * @throws ValidationException
     */
    public function login()
    {
        $this->form->login();
    }
}
