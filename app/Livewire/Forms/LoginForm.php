<?php

namespace App\Livewire\Forms;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    /**
     * @throws ValidationException
     */
    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
}
