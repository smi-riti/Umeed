<?php

namespace App\Livewire\Public;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Enquiry;
use App\Models\Testimonial;
use Livewire\Component;

class Homepage extends Component
{
    
    public $name;
    public $email;
    public $contact;
    public $message;
    public $subject;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
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
            'name' => $this->name, // Combine first and last name
            'email' => $this->email,
            'contact' => $this->contact,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        
        // Reset form fields
        $this->reset(['name','email', 'contact', 'message', 'subject']);
        
        session()->flash('success', 'Message sent successfully!');
    }
    public function render()

    {
        $testimonials = Testimonial::where('status', true)
            ->latest()
            ->take(3)->inRandomOrder()
            ->get();
        $doctors = Doctor::with('department')->take(3)->get();
        $departments = Department::all();
        
        return view('livewire.public.homepage', [
            'doctors' => $doctors,
            'departments' => $departments,
            'testimonials'=> $testimonials,
        ])->layout('layouts.app');
    }
}
