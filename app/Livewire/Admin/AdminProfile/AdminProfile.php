<?php

namespace App\Livewire\Admin\AdminProfile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Admin Profile')]
#[Layout('components.layouts.admin')]
class AdminProfile extends Component
{
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $new_password_confirmation;
    public $showPasswordModal = false;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'current_password' => 'required|current_password',
            'new_password' => 'required|min:8|confirmed',
        ];
    }

    protected $validationAttributes = [
        'current_password' => 'current password',
        'new_password' => 'new password',
        'new_password_confirmation' => 'password confirmation',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        try {
            $user = Auth::user();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->save();

            session()->flash('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update profile: ' . $e->getMessage());
        }
    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required|current_password',
            'new_password' => 'required|min:8|confirmed',
        ]);

        try {
            $user = Auth::user();
            $user->password = Hash::make($this->new_password);
            $user->save();

            // Reset password fields
            $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
            $this->showPasswordModal = false;

            session()->flash('success', 'Password updated successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update password: ' . $e->getMessage());
        }
    }

    public function openPasswordModal()
    {
        $this->showPasswordModal = true;
        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
        $this->resetErrorBag();
    }

    public function closePasswordModal()
    {
        $this->showPasswordModal = false;
        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.admin.admin-profile.admin-profile');
    }
}