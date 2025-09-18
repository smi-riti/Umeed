<?php

namespace App\Livewire\Admin\Doctor;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Add Doctor')]
#[Layout('components.layouts.admin')]
class AddDoctor extends Component
{
    use WithFileUploads;
    
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $department_id = '';
    public string $fee = '500';
    public bool $status = true;
    public $image;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'department_id' => 'required|exists:departments,id',
            'fee' => 'required|numeric|min:0',
            'status' => 'boolean',
            'image' => 'nullable|image|max:2048' // 2MB max
        ];
    }

    protected $messages = [
        'name.required' => 'Doctor name is required.',
        'email.required' => 'Email address is required.',
        'email.email' => 'Please enter a valid email address.',
        'email.unique' => 'This email address is already registered.',
        'password.required' => 'Password is required.',
        'password.min' => 'Password must be at least 8 characters long.',
        'password.confirmed' => 'Password confirmation does not match.',
        'department_id.required' => 'Please select a department.',
        'department_id.exists' => 'Selected department is invalid.',
        'fee.required' => 'Consultation fee is required.',
        'fee.numeric' => 'Consultation fee must be a number.',
        'fee.min' => 'Consultation fee cannot be negative.',
        'image.image' => 'The file must be an image.',
        'image.max' => 'The image size cannot exceed 2MB.'
    ];

    public function save()
    {
        $this->validate();

        try {
            // Create user first
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => 'doctor'
            ]);

            // Handle image upload
            $imagePath = null;
            if ($this->image) {
                $imagePath = $this->image->store('doctors', 'public');
            }

            // Create doctor profile
            Doctor::create([
                'user_id' => $user->id,
                'department_id' => $this->department_id,
                'fee' => $this->fee,
                'status' => $this->status,
                'image' => $imagePath
            ]);

            session()->flash('success', 'Doctor added successfully!');
            
            return redirect()->route('admin.doctors.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to add doctor. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.doctors.list');
    }

    public function render()
    {
        $departments = Department::where('status', true)->get();
        
        return view('livewire.admin.doctor.add-doctor', [
            'departments' => $departments
        ]);
    }
}
