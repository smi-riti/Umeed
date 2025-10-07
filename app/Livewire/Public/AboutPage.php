<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use Livewire\Attributes\Title;
use Livewire\Component;
class AboutPage extends Component
{
    public function render()
    {
        $doctors = Doctor::with('department','profile')->inRandomOrder()->limit(3)->get();
        return view('livewire.public.about-page', compact('doctors'))->layout('layouts.app');
    }
}