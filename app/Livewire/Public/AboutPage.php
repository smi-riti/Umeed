<?php

namespace App\Livewire\Public;

use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.public.about-page')->layout('layouts.app');
    }
}