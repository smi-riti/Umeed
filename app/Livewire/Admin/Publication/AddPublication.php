<?php

namespace App\Livewire\Admin\Publication;

use App\Models\Publication;
use App\Models\Doctor;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Add Publication')]
#[Layout('components.layouts.admin')]
class AddPublication extends Component
{
    public string $doctor_id = '';
    public string $title = '';
    public string $authors = '';
    public string $journal = '';
    public string $publication_year = '';
    public string $link = '';

    protected function rules()
    {
        return [
            'doctor_id' => 'required|exists:doctors,id',
            'title' => 'required|string|max:255',
            'authors' => 'nullable|string|max:255',
            'journal' => 'nullable|string|max:255',
            'publication_year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'link' => 'nullable|url|max:255'
        ];
    }

    protected $messages = [
        'doctor_id.required' => 'Please select a doctor.',
        'doctor_id.exists' => 'Selected doctor is invalid.',
        'title.required' => 'Publication title is required.',
        'title.max' => 'Publication title cannot exceed 255 characters.',
        'authors.max' => 'Authors cannot exceed 255 characters.',
        'journal.max' => 'Journal name cannot exceed 255 characters.',
        'publication_year.integer' => 'Publication year must be a valid year.',
        'publication_year.min' => 'Publication year cannot be before 1900.',
        'publication_year.max' => 'Publication year cannot be in the future.',
        'link.url' => 'Please enter a valid URL.',
        'link.max' => 'Link cannot exceed 255 characters.'
    ];

    public function save()
    {
        $this->validate();

        try {
            Publication::create([
                'doctor_id' => $this->doctor_id,
                'title' => $this->title,
                'authors' => $this->authors ?: null,
                'journal' => $this->journal ?: null,
                'publication_year' => $this->publication_year ?: null,
                'link' => $this->link ?: null,
            ]);

            session()->flash('success', 'Publication created successfully!');
            
            return redirect()->route('admin.publications.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create publication. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.publications.list');
    }

    public function render()
    {
        $doctorProfiles = Doctor::with('user')->get()->sortBy(function($doctor) {
            return $doctor->user->name;
        });
        
        return view('livewire.admin.publication.add-publication', [
            'doctorProfiles' => $doctorProfiles
        ]);
    }
}