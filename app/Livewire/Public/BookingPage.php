<?php

namespace App\Livewire\Public;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Book an Appointment')]
class BookingPage extends Component
{
    // Step tracking
    public $currentStep = 1;
    public $totalSteps = 2;
    
    // Form data - Personal Information
    public $name;
    public $phone;
    public $email;
    
    // Form data - Appointment Details
    public $appointment_date;
    
    // Form data - Medical Information
    public $notes;
    
    // Success data
    
    // Form data - Agreement
    public $terms_accepted = false;
    
    // Form validation rules
    protected $rules = [
        // Step 1 rules
        'name' => 'required|string|min:2|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        
        // Step 2 rules
        'appointment_date' => 'required|date|after_or_equal:today',
        'notes' => 'nullable|string|max:1000',
        
        // General rules
        'terms_accepted' => 'accepted'
    ];
    
    // Custom validation messages
    protected $messages = [
        'name.required' => 'Please enter your full name.',
        'name.min' => 'Name must be at least 2 characters.',
        'phone.required' => 'Please enter your phone number.',
        'phone.max' => 'Phone number is too long.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'appointment_date.required' => 'Please select your preferred date.',
        'appointment_date.after_or_equal' => 'Appointment date must be today or in the future.',
        'notes.max' => 'Notes cannot exceed 1000 characters.',
        'terms_accepted.accepted' => 'You must agree to the terms and conditions.'
    ];
    
    // Step navigation methods
    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name' => 'required|string|min:2|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'nullable|email|max:255',
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
    
    // Form submission
    public function submitForm()
    {
        // Final validation
        $this->validate([
            'appointment_date' => 'required|date|after_or_equal:today',
            'notes' => 'nullable|string|max:1000',
            'terms_accepted' => 'accepted'
        ]);
        
        DB::transaction(function () {
            $patientId = $this->getOrCreatePatient();
            
            // Create the appointment
            $appointment = Appointment::create([
                'patient_id' => $patientId,
                'status' => 'pending',
                'appointment_date' => $this->appointment_date,
                'notes' => $this->notes ?: null,
            ]);
            
            // Generate reference number for display
        });
        
        // Move to success step
        $this->currentStep = 3; // Step 3 is our success message
        
        // Send notification (can be implemented later)
        // Mail::to($this->email)->send(new AppointmentConfirmation($appointment));
    }
    
    private function getOrCreatePatient()
    {
        // Check if patient with this email already exists
        $patient = Patient::where('email', $this->email)->first();
        
        if (!$patient) {
            // Create new patient
            $patient = Patient::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            ]);
        } else {
            // Update existing patient with new information
            $patient->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            ]);
        }

        return $patient->id;
    }
    
    public function render()
    {
        return view('livewire.public.booking-page')
            ->layout('layouts.app');
    }
}