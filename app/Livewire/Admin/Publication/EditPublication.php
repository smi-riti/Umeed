<?php

namespace App\Livewire\Admin\Publication;

use App\Models\Publication;
use App\Models\DoctorProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Edit Publication')]
#[Layout('components.layouts.admin')]
class EditPublication extends Component
{
    public Publication $publication;
    public string $doctor_id = '';
    public string $title = '';
    public string $authors = '';
    public string $journal = '';
    public string $publication_year = '';
    public string $link = '';

    public function mount(Publication $publication)
    {
        $this->publication = $publication;
        $this->doctor_id = (string) $publication->doctor_id;
        $this->title = $publication->title;
        $this->authors = $publication->authors ?? '';
        $this->journal = $publication->journal ?? '';
        $this->publication_year = $publication->publication_year ? (string) $publication->publication_year : '';
        $this->link = $publication->link ?? '';
    }

    protected function rules()
    {
        return [
            'doctor_id' => 'required|exists:doctor_profiles,id',
            'title' => 'required|string|max:255',
            'authors' => 'nullable|string|max:255',
            'journal' => 'nullable|string|max:255',
            'publication_year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'link' => 'nullable|url|max:255'
        ];
    }

    protected $messages = [
        'doctor_id.required' => 'Please select a doctor profile.',
        'doctor_id.exists' => 'Selected doctor profile is invalid.',
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

    public function update()
    {
        $this->validate();

        try {
            $this->publication->update([
                'doctor_id' => $this->doctor_id,
                'title' => $this->title,
                'authors' => $this->authors ?: null,
                'journal' => $this->journal ?: null,
                'publication_year' => $this->publication_year ?: null,
                'link' => $this->link ?: null,
            ]);

            session()->flash('success', 'Publication updated successfully!');
            
            return redirect()->route('admin.publications.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update publication. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.publications.list');
    }

    public function render()
    {
        $doctorProfiles = DoctorProfile::orderBy('name')->get();
        
        return view('livewire.admin.publication.edit-publication', [
            'doctorProfiles' => $doctorProfiles
        ]);
    }
}