<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Book an Appointment')]
class BookingPage extends Component
{
    // Step tracking
    public $currentStep = 1;
    public $totalSteps = 4;
    
    // Form data - Personal Information
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $gender;
    public $age;
    
    // Form data - Appointment Details
    public $department;
    public $doctor_id;
    public $appointment_date;
    public $appointment_time;
    
    // Form data - Medical Information
    public $notes;
    
    // Success data
    public $reference_number;
    
    // Form data - Agreement
    public $terms_accepted = false;
    
    // Form validation rules
    protected $rules = [
        // Step 1 rules
        'first_name' => 'required|string|min:2|max:255',
        'last_name' => 'required|string|min:2|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'gender' => 'nullable|in:male,female,other',
        'age' => 'nullable|integer|min:1|max:150',
        
        // Step 2 rules
        'department' => 'nullable|exists:departments,id',
        'doctor_id' => 'nullable|exists:doctors,id',
        'appointment_date' => 'required|date|after_or_equal:today',
        'appointment_time' => 'nullable|date_format:H:i',
        
        // Step 3 rules
        'notes' => 'required|string|min:10|max:1000',
        
        // Step 4 rules
        'terms_accepted' => 'accepted'
    ];
    
    // Custom validation messages
    protected $messages = [
        'first_name.required' => 'Please enter your first name.',
        'first_name.min' => 'First name must be at least 2 characters.',
        'last_name.required' => 'Please enter your last name.',
        'last_name.min' => 'Last name must be at least 2 characters.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'phone.max' => 'Phone number is too long.',
        'gender.in' => 'Please select a valid gender.',
        'age.integer' => 'Age must be a valid number.',
        'age.min' => 'Age must be at least 1.',
        'age.max' => 'Age cannot exceed 150.',
        'appointment_date.required' => 'Please select your preferred date.',
        'appointment_date.after_or_equal' => 'Appointment date must be today or in the future.',
        'appointment_time.date_format' => 'Please enter a valid time format.',
        'notes.required' => 'Please provide details about your visit.',
        'notes.min' => 'Please provide more details (at least 10 characters).',
        'notes.max' => 'Notes cannot exceed 1000 characters.',
        'terms_accepted.accepted' => 'You must agree to the terms and conditions.'
    ];
    
    // Step navigation methods
    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string|min:2|max:255',
                'last_name' => 'required|string|min:2|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'gender' => 'nullable|in:male,female,other',
                'age' => 'nullable|integer|min:1|max:150',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'department' => 'nullable|exists:departments,id',
                'doctor_id' => 'nullable|exists:doctors,id',
                'appointment_date' => 'required|date|after_or_equal:today',
                'appointment_time' => 'nullable|date_format:H:i',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'notes' => 'required|string|min:10|max:1000',
            ]);
        }
        
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }
    
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    
    public function goToStep($step)
    {
        if ($step >= 1 && $step <= $this->totalSteps) {
            // Only allow navigating to completed steps or the next step
            if ($step <= $this->currentStep || $step == $this->currentStep + 1) {
                $this->currentStep = $step;
            }
        }
    }
    
    // Form submission
    public function submitForm()
    {
        // Convert empty age to null before validation
        if ($this->age === '' || $this->age === '0') {
            $this->age = null;
        }
        
        // Final validation
        $this->validate([
            'terms_accepted' => 'accepted'
        ]);
        
        DB::transaction(function () {
            $patientId = $this->getOrCreatePatient();
            
            // Create the appointment
            $appointment = Appointment::create([
                'patient_id' => $patientId,
                'doctor_id' => $this->doctor_id ?: null,
                'appointment_date' => $this->appointment_date,
                'appointment_time' => $this->appointment_time ?: null,
                'status' => 'pending',
                'notes' => $this->notes,
            ]);
            
            // Generate reference number for display
            $this->reference_number = 'UMEED-' . strtoupper(substr(md5($appointment->id . time()), 0, 8));
        });
        
        // Move to success step
        $this->currentStep = 5; // Step 5 is our success message
        
        // Send notification (can be implemented later)
        // Mail::to($this->email)->send(new AppointmentConfirmation($appointment));
    }
    
    private function getOrCreatePatient()
    {
        // Check if user with this email already exists
        $user = User::where('email', $this->email)->first();
        
        if (!$user) {
            // Create new user with patient role
            $user = User::create([
                'name' => $this->first_name . ' ' . $this->last_name,
                'email' => $this->email,
                'password' => bcrypt('password123'), // Default password
                'role' => 'patient',
            ]);
        } else {
            // Update user role to patient if not already
            if ($user->role !== 'patient') {
                $user->update(['role' => 'patient']);
            }
        }

        // Check if patient record exists
        $patient = Patient::where('user_id', $user->id)->first();
        
        if (!$patient) {
            $patient = Patient::create([
                'user_id' => $user->id,
                'name' => $this->first_name . ' ' . $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone ?: null,
                'gender' => $this->gender ?: null,
                'age' => $this->age ?: null,
            ]);
        } else {
            // Update existing patient with new information
            $patient->update([
                'name' => $this->first_name . ' ' . $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone ?: null,
                'gender' => $this->gender ?: null,
                'age' => $this->age ?: null,
            ]);
        }

        return $patient->id;
    }
    
    // Updated method to handle doctor list when department changes
    public function updatedDepartment()
    {
        $this->doctor_id = null; // Reset doctor selection when department changes
    }
    
    public function render()
    {
        // Load doctors based on department selection
        $doctors = collect();
        if ($this->department) {
            $doctors = Doctor::where('department_id', $this->department)
                           ->where('status', true)
                           ->with(['user', 'department'])
                           ->get();
        } else {
            // Show all active doctors if no department selected
            $doctors = Doctor::where('status', true)
                           ->with(['user', 'department'])
                           ->get();
        }
        
        $departments = Department::where('status', true)->get();
        
        return view('livewire.public.booking-page', [
            'doctors' => $doctors,
            'departments' => $departments
        ])->layout('layouts.app');
    }
}