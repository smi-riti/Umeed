<?php

namespace App\Livewire\Admin\Patient;

use App\Models\Patient;
use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout('components.layouts.admin')]

class ViewPatient extends Component
{
    use WithPagination;

    public $patient;
    public $patientId;
    public $activeTab = 'overview';

    public function mount($id)
    {
        $this->patientId = $id;
        $this->loadPatient();
    }

    public function loadPatient()
    {
        $this->patient = Patient::findOrFail($this->patientId);
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }

    public function deletePatient()
    {
        try {
            $this->patient->delete();
            session()->flash('message', 'Patient deleted successfully!');
            return redirect()->route('admin.patients');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete patient: ' . $e->getMessage());
        }
    }

    public function getAppointmentsCount()
    {
        return Appointment::where('patient_id', $this->patientId)->count();
    }

    public function getUpcomingAppointments()
    {
        return Appointment::with(['doctor.user', 'doctor.department'])
            ->where('patient_id', $this->patientId)
            ->where('appointment_date', '>=', now()->format('Y-m-d'))
            ->whereIn('status', ['pending', 'scheduled'])
            ->orderBy('appointment_date')
            ->orderBy('appointment_time')
            ->limit(5)
            ->get();
    }

    public function render()
    {
        $appointments = [];
        $appointmentsCount = 0;
        $upcomingAppointments = [];

        if ($this->patient) {
            $appointmentsCount = $this->getAppointmentsCount();
            $upcomingAppointments = $this->getUpcomingAppointments();

            if ($this->activeTab === 'appointments') {
                $appointments = Appointment::with(['doctor.user', 'doctor.department'])
                    ->where('patient_id', $this->patientId)
                    ->orderBy('appointment_date', 'desc')
                    ->orderBy('appointment_time', 'desc')
                    ->paginate(10);
            }
        }

        return view('livewire.admin.patient.view-patient', [
            'appointments' => $appointments,
            'appointmentsCount' => $appointmentsCount,
            'upcomingAppointments' => $upcomingAppointments,
        ]);
    }
}