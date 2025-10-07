<?php

namespace App\Livewire\Public;

use App\Models\Enquiry;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('layouts.app')]
class ContactPage extends Component
{
    public $name;
    public $first_name;
    public $last_name;
    public $email;
    public $contact;
    public $message;
    public $subject;

    protected function rules()
    {
        return [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15', 
            'message' => 'required|string|min:10',
            'subject' => 'required|string|max:255', 
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter your full name',
        'email.required' => 'Please enter your email address',
        'email.email' => 'Please enter a valid email address',
        'contact.required' => 'Please enter your contact number',
        'message.required' => 'Please enter your message',
        'subject.required' => 'Please select a subject',
    ];

    public function save()
    {
        $this->validate();
        
        Enquiry::create([
        'name' => $this->first_name . ' ' . $this->last_name, // Combine first and last name
            'email' => $this->email,
            'contact' => $this->contact,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        
        // Reset form fields
        $this->reset(['first_name', 'last_name','email', 'contact', 'message', 'subject']);
        
        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.public.contact-page');
    }
}