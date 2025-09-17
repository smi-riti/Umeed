<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Register Account')]
class Register extends Component
{
    #[Validate('required|min:3|max:255')]
    public $name = '';

    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    #[Validate('required|same:password')]
    public $password_confirmation = '';

    public function register()
    {
        $validated = $this->validate();

        try {
            // Create the user
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'role' => 'user',
                'password' => Hash::make($this->password),
            ]);

            // Log in the user
            Auth::login($user);

            // Reset form fields
            $this->reset(['name', 'email', 'password', 'password_confirmation']);

            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/');
            }

        } catch (\Exception $e) {
            $this->addError('registration', 'Registration failed. Please try again.');
        }
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}