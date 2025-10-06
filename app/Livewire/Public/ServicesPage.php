<?php

namespace App\Livewire\Public;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title("Our Services")]
class ServicesPage extends Component
{
    public function render()
    {
        return view('livewire.public.services-page')->layout('layouts.app');
    }
}