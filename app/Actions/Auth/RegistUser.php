<?php

namespace App\Actions\Auth;

use App\Models\User;
use Auth;
use DB;
use Hash;

final class RegistUser
{
    public function handel(array $data)
    {
        DB::transaction(function () use ($data) {

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            Auth::login($user);

            session()->regenerate();

            return redirect('/dashboard');
        });
    }
}
