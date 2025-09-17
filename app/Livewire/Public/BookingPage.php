<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointment;
use App\Models\Patient;
use Livewire\Component;

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
    public $dob;
    public $gender;
    
    // Form data - Appointment Details
    public $department;
    public $doctor;
    public $preferred_date;
    public $preferred_time;
    public $alternate_date;
    public $appointment_type;
    
    // Form data - Medical Information
    public $reason;
    public $previous_visit;
    public $has_records;
    public $additional_info;
    public $medical_history;
    public $current_medications;
    public $allergies;
    public $previous_treatments;
    
    // Success data
    public $reference_number;
    
    // Form data - Agreement
    public $terms_accepted = false;
    
    // Form validation rules
    protected $rules = [
        // Step 1 rules
        'first_name' => 'required|string|min:3|max:255',
        'last_name' => 'required|string|min:3|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|min:10|max:15',
        'dob' => 'required|date|before:today',
        'gender' => 'required',
        
        // Step 2 rules
        'department' => 'required|exists:departments,id',
        'doctor' => 'nullable|exists:doctors,id',
        'preferred_date' => 'required|date|after:today',
        'preferred_time' => 'required',
        'appointment_type' => 'required',
        'alternate_date' => 'nullable|date|after:today',
        
        // Step 3 rules
        'medical_history' => 'nullable|string',
        'current_medications' => 'nullable|string',
        'allergies' => 'nullable|string',
        'previous_treatments' => 'nullable|string',
        'reason_for_visit' => 'required|string|min:10',
        
        // Step 4 rules
        'agree_to_terms' => 'accepted'
    ];
    
    // Custom validation messages
    protected $messages = [
        'first_name.required' => 'Please enter your first name.',
        'last_name.required' => 'Please enter your last name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'phone.required' => 'Please enter your phone number.',
        'dob.required' => 'Please enter your date of birth.',
        'dob.before' => 'Date of birth must be in the past.',
        'gender.required' => 'Please select your gender.',
        'department.required' => 'Please select a department.',
        'preferred_date.required' => 'Please select your preferred date.',
        'preferred_date.after' => 'Appointment date must be in the future.',
        'preferred_time.required' => 'Please select your preferred time.',
        'appointment_type.required' => 'Please select an appointment type.',
        'reason.required' => 'Please explain the reason for your visit.',
        'reason.min' => 'Please provide more details about the reason for your visit.',
        'previous_visit.required' => 'Please indicate if you have visited us before.',
        'terms_accepted.accepted' => 'You must agree to the terms and conditions.'
    ];
    
    // Step navigation methods
    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string|min:3|max:255',
                'last_name' => 'required|string|min:3|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|min:10|max:15',
                'dob' => 'required|date|before:today',
                'gender' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'department' => 'required|exists:departments,id',
                'doctor' => 'nullable|exists:doctors,id',
                'preferred_date' => 'required|date|after:today',
                'preferred_time' => 'required',
                'appointment_type' => 'required',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'reason' => 'required|string|min:10',
                'previous_visit' => 'required',
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
        // Final validation
        $this->validate([
            'terms_accepted' => 'accepted'
        ]);
        
        // Create a new patient or find existing one
        $patient = Patient::firstOrCreate(
            ['email' => $this->email],
            [
                'name' => $this->first_name . ' ' . $this->last_name,
                'phone' => $this->phone,
                'dob' => $this->dob,
                'gender' => $this->gender
            ]
        );
        
        // Create the appointment
        $appointment = Appointment::create([
            'patient_id' => $patient->id,
            'doctor_id' => $this->doctor,
            'department_id' => $this->department,
            'appointment_date' => $this->preferred_date,
            'appointment_time' => $this->preferred_time,
            'appointment_type' => $this->appointment_type,
            'alternate_date' => $this->alternate_date,
            'medical_history' => $this->medical_history,
            'current_medications' => $this->current_medications,
            'allergies' => $this->allergies,
            'previous_treatments' => $this->previous_treatments,
            'reason_for_visit' => $this->reason,
            'status' => 'pending'
        ]);
        
        // Generate reference number for the appointment
        $this->reference_number = 'UMEED-' . strtoupper(substr(md5($appointment->id . time()), 0, 8));
        
        // Update appointment with reference number
        $appointment->update(['reference_number' => $this->reference_number]);
        
        // Move to success step
        $this->currentStep = 5; // Step 5 is our success message
        
        // Send notification (can be implemented later)
        // Mail::to($patient->email)->send(new AppointmentConfirmation($appointment));
    }
    
    // Updated method to handle doctor list when department changes
    public function updatedDepartment()
    {
        $this->doctor = null; // Reset doctor selection when department changes
    }
    
    public function render()
    {
        $doctors = Doctor::where('department_id', $this->department ?? 0)
                         ->orWhereNull('department_id')
                         ->get();
        $departments = Department::all();
        
        return view('livewire.public.booking-page', [
            'doctors' => $doctors,
            'departments' => $departments
        ]);
    }
}