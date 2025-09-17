<?php

namespace App\Livewire\Public;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ContactPage extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.public.contact-page');
    }
}