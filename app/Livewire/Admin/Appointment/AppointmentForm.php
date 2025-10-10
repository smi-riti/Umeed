<?php

namespace App\Livewire\Admin\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Appointment Form')]
#[Layout('components.layouts.admin')]

class AppointmentForm extends Component
{
    public $appointmentId;

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
        'patient_email' => 'nullable|email|max:255',
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

    public function mount($appointmentId = null)
    {
        if ($appointmentId) {
            $this->appointmentId = $appointmentId;
            $appointment = Appointment::with('patient')->findOrFail($appointmentId);

            $this->existing_patient_id = $appointment->patient_id;
            $this->use_existing_patient = true;
            $this->doctor_id = $appointment->doctor_id;
            $this->appointment_date = $appointment->appointment_date->format('Y-m-d');
            $this->appointment_time = $appointment->appointment_time ? $appointment->appointment_time->format('H:i') : '';
            $this->notes = $appointment->notes;
            $this->status = $appointment->status;
        } else {
            $this->appointment_date = now()->format('Y-m-d');
        }
    }

    public function updatedUseExistingPatient()
    {
        if (! $this->use_existing_patient) {
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
        if ($this->patient_age === '' || $this->patient_age === '0') {
            $this->patient_age = null;
        }

        $this->validate();

        DB::transaction(function () {
            $patientId = $this->getOrCreatePatient();

            if ($this->appointmentId) {
                $appointment = Appointment::findOrFail($this->appointmentId);
                $appointment->update([
                    'patient_id' => $patientId,
                    'doctor_id' => $this->doctor_id ?: null,
                    'appointment_date' => $this->appointment_date,
                    'appointment_time' => $this->appointment_time ?: null,
                    'notes' => $this->notes,
                    'status' => $this->status,
                ]);
            } else {
                Appointment::create([
                    'patient_id' => $patientId,
                    'doctor_id' => $this->doctor_id ?: null,
                    'appointment_date' => $this->appointment_date,
                    'appointment_time' => $this->appointment_time ?: null,
                    'notes' => $this->notes,
                    'status' => $this->status,
                    'created_by' => auth()->id(),
                ]);
            }
        });

        session()->flash('message', $this->appointmentId ? 'Appointment updated successfully.' : 'Appointment created successfully.');
        return redirect()->route('admin.appointments.list');
    }

    private function getOrCreatePatient()
    {
        if ($this->use_existing_patient) {
            return $this->existing_patient_id;
        }

        // Check if patient already exists by email
        $patient = null;
        if (!empty($this->patient_email)) {
            $patient = Patient::where('email', $this->patient_email)->first();
        }

        if (! $patient) {
            $patient = Patient::create([
                'name' => $this->patient_name,
                'email' => $this->patient_email ?: null,
                'phone' => $this->patient_phone ?: null,
                'gender' => $this->patient_gender ?: null,
                'age' => $this->patient_age ?: null,
            ]);
        } else {
            $patient->update([
                'name' => $this->patient_name,
                'email' => $this->patient_email ?: null,
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
        $patients = Patient::all();

        return view('livewire.admin.appointment.appointment-form', [
            'doctors' => $doctors,
            'patients' => $patients,
        ]);
    }
}
