<?php

namespace App\Actions\Auth;

use Auth;
use Exception;

final class AttempLogin
{
    public function handel(array $data)
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $data['remember'] ?? false)) {
            session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        throw new Exception('The provided credentials are incorrect', 200);
    }
}
