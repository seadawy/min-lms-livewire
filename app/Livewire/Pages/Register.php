<?php

namespace App\Livewire\Pages;

use App\Actions\Auth\RegistUser;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Register')]
class Register extends Component
{
    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|email|max:255|unique:users')]
    public $email = '';

    #[Validate('required|min:6|confirmed')]
    public $password = '';

    #[Validate('required')]
    public $password_confirmation = '';

    public function register(RegistUser $action)
    {
        $data = $this->validate();
        try {
            $action->handel($data);
        } catch (\Throwable $th) {
            $this->addError('email', $th->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.pages.register');
    }
}
