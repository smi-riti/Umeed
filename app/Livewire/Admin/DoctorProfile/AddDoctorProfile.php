<?php

namespace App\Livewire\Admin\DoctorProfile;

use App\Models\DoctorProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Add Doctor Profile')]
#[Layout('components.layouts.admin')]
class AddDoctorProfile extends Component
{
    public string $doctor_id = '';
    public string $qualification = '';
    public string $professional_bio = '';
    public string $membership = '';
    public string $social_media_link = '';
    public string $special_interest = '';
    public string $achievements = '';
    public string $language_spoken = '';
    public array $socialMediaLinks = [];
    public string $experience = '';

    protected function rules()
    {
        return [
            'doctor_id' => 'required|exists:doctors,id',
            'qualification' => 'nullable|string|max:255',
            'professional_bio' => 'nullable|string|max:1000',
            'membership' => 'nullable|string|max:255',
            'social_media_link' => 'nullable|string|max:1000',
            'special_interest' => 'nullable|string|max:255',
            'achievements' => 'nullable|string|max:1000',
            'language_spoken' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255'

        ];
    }

    protected $messages = [
        'doctor_id.required' => 'Please select a doctor.',
        'doctor_id.exists' => 'Selected doctor does not exist.',
        'qualification.max' => 'Qualification cannot exceed 255 characters.',
        'professional_bio.max' => 'Professional bio cannot exceed 1000 characters.',
        'membership.max' => 'Membership cannot exceed 255 characters.',
        'social_media_link.max' => 'Social media links cannot exceed 1000 characters.',
        'special_interest.max' => 'Special interest cannot exceed 255 characters.',
        'achievements.max' => 'Achievements cannot exceed 1000 characters.',
        'language_spoken.max' => 'Languages spoken cannot exceed 255 characters.',
        'experience.max' => 'Experience cannot exceed 255 characters.',
    ];

    public function save()
    {
        $this->validate();

        try {
            // Check if the doctor already has a profile
            $existingProfile = DoctorProfile::where('doctor_id', $this->doctor_id)->first();
            if ($existingProfile) {
                session()->flash('error', 'This doctor already has a profile. Please edit the existing profile instead.');
                return;
            }
            // Process social media links from the form fields
            $formattedLinks = [];
            foreach ($this->socialMediaLinks as $link) {
                if (!empty($link['platform']) && !empty($link['url'])) {
                    $formattedLinks[] = $link['platform'] . ':' . $link['url'];
                }
            }
            
            // For backward compatibility, also process the old format if present
            if (!empty($this->social_media_link)) {
                $links = json_decode($this->social_media_link, true);
                
                if (!$links) {
                    // If not valid JSON, parse structured format
                    $parts = preg_split('/,(?![^:]*:)/', $this->social_media_link);
                    
                    foreach ($parts as $part) {
                        $part = trim($part);
                        if (empty($part)) continue;
                        
                        // Check if it has platform:url format
                        if (strpos($part, ':') !== false) {
                            $formattedLinks[] = $part;
                        } else {
                            // Try to detect platform from URL
                            $url = $part;
                            $platform = $this->detectPlatform($url);
                            $formattedLinks[] = "$platform:$url";
                        }
                    }
                } else {
                    foreach ($links as $platform => $url) {
                        $formattedLinks[] = "$platform:$url";
                    }
                }
            }
            
            $socialMediaLinks = $formattedLinks;
            
            // Convert language_spoken and achievements to arrays if they're strings
            $languages = $this->language_spoken;
            if (!empty($languages) && is_string($languages)) {
                $languages = array_map('trim', explode(',', $languages));
            }
            
            $achievements = $this->achievements;
            if (!empty($achievements) && is_string($achievements)) {
                $achievements = array_map('trim', explode(',', $achievements));
            }
            
            DoctorProfile::create([
                'doctor_id' => $this->doctor_id,
                'qualification' => $this->qualification ?: null,
                'professional_bio' => $this->professional_bio ?: null,
                'membership' => $this->membership ?: null,
                'social_media_link' => $socialMediaLinks,
                'special_interest' => $this->special_interest ?: null,
                'achievements' => $achievements,
                'language_spoken' => $languages,
                'experience' => $this->experience ?: null,

            ]);

            session()->flash('success', 'Doctor profile created successfully!');
            
            return redirect()->route('admin.doctor-profiles.list');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create doctor profile. Please try again.');
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.doctor-profiles.list');
    }

    // Helper method to detect social media platform from URL
    protected function detectPlatform(string $url): string
    {
        $url = strtolower($url);
        if (strpos($url, 'instagram') !== false || strpos($url, 'insta') !== false) {
            return 'instagram';
        } elseif (strpos($url, 'facebook') !== false || strpos($url, 'fb.com') !== false) {
            return 'facebook';
        } elseif (strpos($url, 'twitter') !== false || strpos($url, 'x.com') !== false) {
            return 'twitter';
        } elseif (strpos($url, 'linkedin') !== false) {
            return 'linkedin';
        } elseif (strpos($url, 'youtube') !== false) {
            return 'youtube';
        }
        return 'website';
    }
    
    public function addSocialLink()
    {
        $this->socialMediaLinks[] = ['platform' => '', 'url' => ''];
    }
    
    public function removeSocialLink($index)
    {
        if (count($this->socialMediaLinks) > 1) {
            unset($this->socialMediaLinks[$index]);
            $this->socialMediaLinks = array_values($this->socialMediaLinks);
        }
    }
    
    public function mount()
    {
        // Initialize with one empty social media link
        $this->socialMediaLinks = [['platform' => '', 'url' => '']];
    }
    
    public function render()
    {
        // Get all doctors with status true that don't already have a profile
        $doctors = \App\Models\Doctor::with('user')
                    ->where('status', true)
                    ->whereDoesntHave('profiles')
                    ->get()
                    ->map(function($doctor) {
                        return [
                            'id' => $doctor->id,
                            'name' => $doctor->user->name ?? 'N/A',
                            'email' => $doctor->email,
                            'department' => $doctor->department->name ?? 'N/A'
                        ];
                    });
                    
        return view('livewire.admin.doctor-profile.add-doctor-profile', [
            'doctors' => $doctors
        ]);
    }
}