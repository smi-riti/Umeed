<?php

namespace App\Livewire\Admin\DoctorProfile;

use App\Models\DoctorProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Edit Doctor Profile')]
#[Layout('components.layouts.admin')]
class EditDoctorProfile extends Component
{
    public DoctorProfile $profile;
    public string $name = '';
    public string $qualification = '';
    public string $professional_bio = '';
    public string $membership = '';
    public string $social_media_link = '';
    public string $special_interest = '';
    public string $achievements = '';
    public string $language_spoken = '';

    public function mount(DoctorProfile $profile)
    {
        $this->profile = $profile;
        $this->name = $profile->name;
        $this->qualification = $profile->qualification ?? '';
        $this->professional_bio = $profile->professional_bio ?? '';
        $this->membership = $profile->membership ?? '';
        $this->social_media_link = $profile->social_media_link ?? '';
        $this->special_interest = $profile->special_interest ?? '';
        $this->achievements = $profile->achievements ?? '';
        $this->language_spoken = $profile->language_spoken ?? '';
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'professional_bio' => 'nullable|string|max:1000',
            'membership' => 'nullable|string|max:255',
            'social_media_link' => 'nullable|url|max:255',
            'special_interest' => 'nullable|string|max:255',
            'achievements' => 'nullable|string|max:1000',
            'language_spoken' => 'nullable|string|max:255'
        ];
    }

    protected $messages = [
        'name.required' => 'Doctor name is required.',
        'name.max' => 'Doctor name cannot exceed 255 characters.',
        'qualification.max' => 'Qualification cannot exceed 255 characters.',
        'professional_bio.max' => 'Professional bio cannot exceed 1000 characters.',
        'membership.max' => 'Membership cannot exceed 255 characters.',
        'social_media_link.url' => 'Please enter a valid URL for social media link.',
        'social_media_link.max' => 'Social media link cannot exceed 255 characters.',
        'special_interest.max' => 'Special interest cannot exceed 255 characters.',
        'achievements.max' => 'Achievements cannot exceed 1000 characters.',
        'language_spoken.max' => 'Languages spoken cannot exceed 255 characters.'
    ];

    public function update()
    {
        $this->validate();

        try {
            $this->profile->update([
                'name' => $this->name,
                'qualification' => $this->qualification ?: null,
                'professional_bio' => $this->professional_bio ?: null,
                'membership' => $this->membership ?: null,
                'social_media_link' => $this->social_media_link ?: null,
                'special_interest' => $this->special_interest ?: null,
                'achievements' => $this->achievements ?: null,
                'language_spoken' => $this->language_spoken ?: null,
            ]);

            session()->flash('success', 'Doctor profile updated successfully!');
            
            return redirect()->route('admin.doctor-profiles.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update doctor profile. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.doctor-profiles.list');
    }

    public function render()
    {
        return view('livewire.admin.doctor-profile.edit-doctor-profile');
    }
}