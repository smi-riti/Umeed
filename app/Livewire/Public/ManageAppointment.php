<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Patient;
use Livewire\Attributes\Validate;

class ManageAppointment extends Component
{
    #[Validate('required')]
    public $search = '';

    public $appointments = [];
    public $patient = null;
    public $showResults = false;
    public $noResults = false;
    public $searchType = '';

    public function searchAppointments()
    {
        $this->validate();
        
        // Reset states
        $this->resetResults();

        // Determine search type and find patient
        if (filter_var($this->search, FILTER_VALIDATE_EMAIL)) {
            // Search by email
            $this->searchType = 'email';
            $this->patient = Patient::where('email', $this->search)->first();
        } else {
            // Search by phone
            $this->searchType = 'phone';
            $this->patient = Patient::where('phone', $this->search)->first();
        }

        if ($this->patient) {
            // Get appointments for this patient
            $this->appointments = Appointment::with(['doctor', 'doctor.user'])
                ->where('patient_id', $this->patient->id)
                ->orderBy('appointment_date', 'desc')
                ->orderBy('appointment_time', 'desc')
                ->get();

            $this->showResults = true;
            $this->noResults = $this->appointments->isEmpty();
        } else {
            $this->noResults = true;
        }
    }

    private function resetResults()
    {
        $this->appointments = [];
        $this->patient = null;
        $this->showResults = false;
        $this->noResults = false;
        $this->searchType = '';
    }

    public function resetSearch()
    {
        $this->reset(['search', 'appointments', 'patient', 'showResults', 'noResults', 'searchType']);
    }

    public function render()
    {
        return view('livewire.public.manage-appointment')->layout('layouts.app');
    }
}