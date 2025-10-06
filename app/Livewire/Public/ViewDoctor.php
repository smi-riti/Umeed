<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use Livewire\Component;

class ViewDoctor extends Component
{
    public $doctor;
    public $doctorId;
    public $user;
    
    public function mount($id)
    {
        $this->doctorId = $id;
        $this->doctor = Doctor::with(['department', 'user'])
                            ->findOrFail($id);
        $this->user = $this->doctor->user;
    }

    public function render()
    {
        return view('livewire.public.view-doctor')->layout('layouts.app');
    }
}