<?php

namespace App\Livewire\Admin\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    
    // Appointment fields
    public $doctor_id = '';
    public $appointment_date = '';
    public $appointment_time = '';
    public $notes = '';
    public $status = 'pending';
    public $original_date = '';
    public $created_by = '';

    protected $rules = [
        'patient_name' => 'required|string|max:255',
        'patient_email' => 'nullable|email|max:255',
        'patient_phone' => 'required|string|max:20',
        'patient_gender' => 'nullable|in:male,female,other',
        'patient_age' => 'nullable|integer|min:1|max:150',
        'doctor_id' => 'nullable|exists:doctors,id',
        'appointment_date' => 'required|date|after_or_equal:today',
        'appointment_time' => 'nullable|date_format:H:i',
        'notes' => 'nullable|string|max:1000',
        'status' => 'required|in:pending,scheduled,completed,cancelled',
        'original_date' => 'nullable|date',
    ];

    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->appointment = null;
        $this->loadAppointment();
    }


    public function updatedAppointmentId($value)
    {
        $this->loadAppointment();
    }

    private function loadAppointment()
    {
        if (! $this->appointmentId) {
            return;
        }

        $this->appointment = Appointment::with(['patient', 'doctor', 'createdBy'])->findOrFail($this->appointmentId);

        // Load appointment data
        $this->doctor_id = $this->appointment->doctor_id;
        $this->appointment_date = $this->appointment->appointment_date ? $this->appointment->appointment_date->format('Y-m-d') : '';
        $this->appointment_time = $this->appointment->appointment_time ? $this->appointment->appointment_time->format('H:i') : '';
        $this->notes = $this->appointment->notes;
        $this->status = $this->appointment->status;
        $this->original_date = $this->appointment->original_date ? $this->appointment->original_date->format('Y-m-d') : '';
        $this->created_by = $this->appointment->createdBy ? $this->appointment->createdBy->name : 'System';

        // Load patient data for editing
        $this->patient_name = $this->appointment->patient->name;
        $this->patient_email = $this->appointment->patient->email ?? '';
        $this->patient_phone = $this->appointment->patient->phone ?? '';
        $this->patient_gender = $this->appointment->patient->gender ?? '';
        $this->patient_age = $this->appointment->patient->age ?? '';
    }

    public function save()
    {
        // Convert empty age to null before validation
        if ($this->patient_age === '' || $this->patient_age === '0') {
            $this->patient_age = null;
        }
        
        $this->validate();

        DB::transaction(function () {
            $this->updatePatient();
            
            // Set original_date to current edit date and created_by to logged in user
            $editDate = now()->toDateString();
            $currentUser = Auth::user();
            $createdById = $this->appointment->created_by; // preserve existing by default
            if ($currentUser && method_exists($currentUser, 'isAdmin') && $currentUser->isAdmin()) {
                $createdById = $currentUser->id;
            }

            // Update appointment
            $this->appointment->update([
                'doctor_id' => $this->doctor_id ?: null,
                'appointment_date' => $this->appointment_date,
                'appointment_time' => $this->appointment_time ?: null,
                'notes' => $this->notes,
                'status' => $this->status,
                'original_date' => $editDate,
                'created_by' => $createdById,
            ]);
        });

        session()->flash('message', 'Appointment updated successfully.');
        
        return redirect()->route('admin.appointments.list');
    }

    private function updatePatient()
    {
        $this->appointment->patient->update([
            'name' => $this->patient_name,
            'email' => $this->patient_email,
            'phone' => $this->patient_phone ?: null,
            'gender' => $this->patient_gender ?: null,
            'age' => $this->patient_age ?: null,
        ]);
    }

    public function render()
    {
        $doctors = Doctor::with('user', 'department')->get();

        return view('livewire.admin.appointment.edit-appointment', [
            'doctors' => $doctors,
        ]);
    }
}