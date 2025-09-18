<?php

namespace App\Livewire\Admin\Doctor;

use App\Models\Doctor;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Edit Doctor')]
#[Layout('components.layouts.admin')]
class EditDoctor extends Component
{
    use WithFileUploads;
    
    public Doctor $doctor;
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $department_id = '';
    public string $fee = '';
    public bool $status = true;
    public $image;
    public bool $removeImage = false;

    public function mount(Doctor $doctor)
    {
        $this->doctor = $doctor->load('user', 'department');
        $this->name = $this->doctor->user->name;
        $this->email = $this->doctor->user->email;
        $this->department_id = $this->doctor->department_id ?? '';
        $this->fee = $this->doctor->fee;
        $this->status = $this->doctor->status;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->doctor->user->id,
            'password' => 'nullable|string|min:8|confirmed',
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
            // Update user information
            $userData = [
                'name' => $this->name,
                'email' => $this->email,
            ];

            // Only update password if provided
            if (!empty($this->password)) {
                $userData['password'] = Hash::make($this->password);
            }

            $this->doctor->user->update($userData);

            // Handle image upload
            $doctorData = [
                'department_id' => $this->department_id,
                'fee' => $this->fee,
                'status' => $this->status
            ];

            // Handle image update
            if ($this->image) {
                // Delete old image if exists
                if ($this->doctor->image) {
                    Storage::disk('public')->delete($this->doctor->image);
                }
                $doctorData['image'] = $this->image->store('doctors', 'public');
            } elseif ($this->removeImage && $this->doctor->image) {
                // Remove image if requested
                Storage::disk('public')->delete($this->doctor->image);
                $doctorData['image'] = null;
            }

            // Update doctor information
            $this->doctor->update($doctorData);

            session()->flash('success', 'Doctor updated successfully!');
            
            return redirect()->route('admin.doctors.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update doctor. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.doctors.list');
    }

    public function render()
    {
        $departments = Department::where('status', true)->get();
        
        return view('livewire.admin.doctor.edit-doctor', [
            'departments' => $departments
        ]);
    }
}
