<?php

namespace App\Livewire\Admin\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;

#[Title('Department List')]
#[Layout('components.layouts.admin')]
class AppointmentList extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';
    public $doctor_id = '';
    public $date_from = '';
    public $date_to = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => ''],
        'doctor_id' => ['except' => ''],
        'date_from' => ['except' => ''],
        'date_to' => ['except' => ''],
    ];

    protected $listeners = ['confirmed-delete' => 'handleConfirmedDelete'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function updatingDoctorId()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->search = '';
        $this->status = '';
        $this->doctor_id = '';
        $this->date_from = '';
        $this->date_to = '';
        $this->resetPage();
    }

    public function updateStatus($appointmentId, $status)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        $appointment->update(['status' => $status]);
        
        session()->flash('message', 'Appointment status updated successfully.');
    }

    public function deleteAppointment($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        
        $this->dispatch('showDeleteConfirmation', [
            'id' => $appointmentId,
            'title' => 'Delete Appointment',
            'message' => "Are you sure you want to delete the appointment for {$appointment->patient->name}? This action cannot be undone.",
            'confirmText' => 'Delete Appointment',
            'cancelText' => 'Cancel'
        ]);
    }

    public function handleConfirmedDelete($data)
    {
        try {
            $appointment = Appointment::findOrFail($data['id']);
            $patientName = $appointment->patient->name;
            $appointment->delete();
            
            session()->flash('message', "Appointment for {$patientName} has been deleted successfully.");
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete appointment. Please try again.');
        }
    }

    public function render()
    {
        $appointments = Appointment::with(['patient', 'doctor.user', 'createdBy'])
            ->when($this->search, function ($query) {
                $query->whereHas('patient', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%')
                      ->orWhere('phone', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status, function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->doctor_id, function ($query) {
                $query->where('doctor_id', $this->doctor_id);
            })
            ->when($this->date_from, function ($query) {
                $query->where('appointment_date', '>=', $this->date_from);
            })
            ->when($this->date_to, function ($query) {
                $query->where('appointment_date', '<=', $this->date_to);
            })
            ->orderBy('appointment_date', 'desc')
            ->orderBy('appointment_time', 'desc')
            ->paginate(10);

        $doctors = Doctor::with('user')->get();

        return view('livewire.admin.appointment.appointment-list', [
            'appointments' => $appointments,
            'doctors' => $doctors,
        ]);
    }
}