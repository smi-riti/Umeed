<?php

namespace App\Livewire\Public;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.public.contact-page')->layout('layouts.app');
    }
}