<?php

namespace App\Livewire\Admin\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;

#[Title('Edit Appointment')]
#[Layout('components.layouts.admin')]
class EditAppointment extends Component
{
    public $appointmentId;
    public $appointment;
    
    // Patient fields
    public $patient_name = '';
    public $patient_email = '';
    public $patient_phone = '';
    public $patient_gender = '';
    public $patient_age = '';
    public $existing_patient_id = '';
    public $use_existing_patient = false;
    
    // Appointment fields
    public $doctor_id = '';
    public $appointment_date = '';
    public $appointment_time = '';
    public $notes = '';
    public $status = 'pending';

    protected $rules = [
        'patient_name' => 'required_if:use_existing_patient,false|string|max:255',
        'patient_email' => 'required_if:use_existing_patient,false|email|max:255',
        'patient_phone' => 'nullable|string|max:20',
        'patient_gender' => 'nullable|in:male,female,other',
        'patient_age' => 'nullable|integer|min:1|max:150',
        'existing_patient_id' => 'required_if:use_existing_patient,true|exists:patients,id',
        'doctor_id' => 'nullable|exists:doctors,id',
        'appointment_date' => 'required|date|after_or_equal:today',
        'appointment_time' => 'nullable|date_format:H:i',
        'notes' => 'nullable|string|max:1000',
        'status' => 'required|in:pending,scheduled,completed,cancelled',
    ];

    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->appointment = Appointment::with(['patient.user', 'doctor'])->findOrFail($appointmentId);
        
        // Load appointment data
        $this->existing_patient_id = $this->appointment->patient_id;
        $this->use_existing_patient = true;
        $this->doctor_id = $this->appointment->doctor_id;
        $this->appointment_date = $this->appointment->appointment_date->format('Y-m-d');
        $this->appointment_time = $this->appointment->appointment_time ? $this->appointment->appointment_time->format('H:i') : '';
        $this->notes = $this->appointment->notes;
        $this->status = $this->appointment->status;
        
        // Load patient data for editing
        $this->patient_name = $this->appointment->patient->name;
        $this->patient_email = $this->appointment->patient->email;
        $this->patient_phone = $this->appointment->patient->phone;
        $this->patient_gender = $this->appointment->patient->gender;
        $this->patient_age = $this->appointment->patient->age;
    }

    public function updatedUseExistingPatient()
    {
        if (!$this->use_existing_patient) {
            $this->existing_patient_id = '';
        } else {
            $this->resetPatientFields();
        }
    }

    private function resetPatientFields()
    {
        $this->patient_name = '';
        $this->patient_email = '';
        $this->patient_phone = '';
        $this->patient_gender = '';
        $this->patient_age = '';
    }

    public function save()
    {
        // Convert empty age to null before validation
        if ($this->patient_age === '' || $this->patient_age === '0') {
            $this->patient_age = null;
        }
        
        $this->validate();

        DB::transaction(function () {
            $patientId = $this->getOrCreatePatient();
            
            // Update existing appointment
            $this->appointment->update([
                'patient_id' => $patientId,
                'doctor_id' => $this->doctor_id ?: null,
                'appointment_date' => $this->appointment_date,
                'appointment_time' => $this->appointment_time ?: null,
                'notes' => $this->notes,
                'status' => $this->status,
            ]);
        });

        session()->flash('message', 'Appointment updated successfully.');
        
        return redirect()->route('admin.appointments.list');
    }

    private function getOrCreatePatient()
    {
        if ($this->use_existing_patient) {
            return $this->existing_patient_id;
        }

        // Check if user with this email already exists
        $user = User::where('email', $this->patient_email)->first();
        
        if (!$user) {
            // Create new user with patient role
            $user = User::create([
                'name' => $this->patient_name,
                'email' => $this->patient_email,
                'password' => Hash::make('password123'), // Default password
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
                'name' => $this->patient_name,
                'email' => $this->patient_email,
                'phone' => $this->patient_phone ?: null,
                'gender' => $this->patient_gender ?: null,
                'age' => $this->patient_age ?: null,
            ]);
        } else {
            // Update existing patient
            $patient->update([
                'name' => $this->patient_name,
                'email' => $this->patient_email,
                'phone' => $this->patient_phone ?: null,
                'gender' => $this->patient_gender ?: null,
                'age' => $this->patient_age ?: null,
            ]);
        }

        return $patient->id;
    }

    public function render()
    {
        $doctors = Doctor::with('user', 'department')->get();
        $patients = Patient::with('user')->get();

        return view('livewire.admin.appointment.edit-appointment', [
            'doctors' => $doctors,
            'patients' => $patients,
        ]);
    }
}