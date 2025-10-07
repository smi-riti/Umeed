<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Testimonial;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title("Our Doctors")]
class DoctorsPage extends Component
{
    public function render()
    {
        
        $testimonials = Testimonial::where('status', true)
            ->latest()
            ->take(3)->inRandomOrder()
            ->get();
        $doctors = Doctor::with('department','profile')->inRandomOrder()->limit(3)->get();
        $departments = Department::inRandomOrder()->limit(3)->get();        
        return view('livewire.public.doctors-page', [
            'doctors' => $doctors,
            'departments' => $departments,
            'testimonials' => $testimonials,
        ])->layout('layouts.app');
    }
}