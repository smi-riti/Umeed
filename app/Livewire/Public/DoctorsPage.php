<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use Livewire\Component;

class DoctorsPage extends Component
{
    public function render()
    {
        $doctors = Doctor::with('department')->get();
        $departments = Department::all();
        
        return view('livewire.public.doctors-page', [
            'doctors' => $doctors,
            'departments' => $departments
        ])->layout('layouts.app');
    }
}