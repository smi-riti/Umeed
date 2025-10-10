<?php

namespace App\Livewire\Admin\Appointment;

use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('components.layouts.admin')]

class ViewAppointment extends Component
{
    public $appointment;
    public $appointmentId;

    public function mount($id)
    {
        $this->appointmentId = $id;
        $this->loadAppointment();
    }

    public function loadAppointment()
    {
        $this->appointment = Appointment::with(['patient', 'doctor.user', 'doctor.department', 'createdBy'])
            ->findOrFail($this->appointmentId);
    }

    public function deleteAppointment()
    {
        try {
            $this->appointment->delete();
            $this->dispatch('appointment-deleted', message: 'Appointment deleted successfully!');
            return redirect()->route('admin.appointments.list');
        } catch (\Exception $e) {
            $this->dispatch('appointment-delete-failed', message: 'Failed to delete appointment: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.appointment.view-appointment');
    }
}