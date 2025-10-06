<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title("Doctor's Profile")]
class ViewDoctor extends Component
{
    public $doctor;
    public $doctorId;
    public $user;
    
    public function mount($id)
    {
        $this->doctorId = $id;
        $this->doctor = Doctor::with(['department', 'user', 'profile'])
                            ->findOrFail($id);
        $this->user = $this->doctor->user;
    }

    public function render()
    {
        return view('livewire.public.view-doctor')->layout('layouts.app');
    }
}