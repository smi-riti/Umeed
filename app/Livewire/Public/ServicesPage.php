<?php

namespace App\Livewire\Public;

use Livewire\Component;

class ServicesPage extends Component
{
    public function render()
    {
        return view('livewire.public.services-page')->layout('layouts.app');
    }
}