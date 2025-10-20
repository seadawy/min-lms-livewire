<?php

namespace App\Livewire\Pages;

use App\Actions\Auth\AttempLogin;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    public $remember = false;

    public function login(AttempLogin $action)
    {
        try {
            $data = $this->validate();
            $action->handel($data);
        } catch (\Throwable $th) {
            $this->addError('email', $th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.login');
    }
}
