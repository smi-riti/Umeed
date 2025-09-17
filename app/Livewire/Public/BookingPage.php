<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use Livewire\Component;

class BookingPage extends Component
{
    public function render()
    {
        $doctors = Doctor::with('department')->get();
        $departments = Department::all();
        
        return view('livewire.public.booking-page', [
            'doctors' => $doctors,
            'departments' => $departments
        ])->layout('layouts.app');
    }
}