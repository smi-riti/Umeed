<?php

namespace App\Livewire\Admin\Patient;

use App\Models\Patient;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class ManagePatient extends Component
{
    use WithPagination;

    public $patients = [];
    public $selectedPatient = null;

    public function mount()
    {
        $this->loadPatients();
    }

    public function loadPatients()
    {
        // Load all patients (no user relationship anymore)
        $this->patients = Patient::all();
    }


    public function deletePatient($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        $patient->delete();

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
