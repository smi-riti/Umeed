<?php

namespace App\Livewire\Admin\DoctorProfile;

use App\Models\Doctor;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('components.layouts.admin')]

class ViewDoctorProfile extends Component
{
    public $doctor;
    public $activeTab = 'overview';

    public function mount($id)
    {
        $this->doctor = Doctor::with(['user', 'department', 'doctorProfile'])
                            ->findOrFail($id);
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.admin.doctor-profile.view-doctor-profile');
    }
}