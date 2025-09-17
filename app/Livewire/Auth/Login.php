<?php

namespace App\Livewire\Auth;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
#[Title('Login')]
class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/');
            }
        } else {
            $this->addError('email', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
