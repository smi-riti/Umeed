<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $doctors = Doctor::with('department')->take(3)->get();
        $departments = Department::all();
        
        return view('livewire.public.homepage', [
            'doctors' => $doctors,
            'departments' => $departments
        ])->layout('layouts.app');
    }
}
