<?php

namespace App\Livewire\Admin\Patient;

use App\Models\Patient;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout('components.layouts.admin')]
#[Title('Manage Patients')]

class ManagePatient extends Component
{
    use WithPagination;

    public $patients = [];
    public $selectedPatient = null;
    public $showDetails = false;

    public function mount()
    {
        $this->loadPatients();
    }

    public function loadPatients()
    {
        // Get all patients with their user relationship
        $this->patients = Patient::with('user')->get()->toArray();
    }

    public function showPatientDetails($patientId)
    {
        $this->selectedPatient = Patient::with('user')->findOrFail($patientId);
        $this->showDetails = true;
    }

    public function closeDetails()
    {
        $this->showDetails = false;
        $this->selectedPatient = null;
    }

    public function deletePatient($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        $userId = $patient->user_id;
        
        // Delete patient record
        $patient->delete();
        
        // Also delete the associated user
        User::find($userId)->delete();
        
        $this->loadPatients();
        session()->flash('message', 'Patient deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.patient.manage-patient', [
            'patientsList' => $this->patients
        ]);
    }
}