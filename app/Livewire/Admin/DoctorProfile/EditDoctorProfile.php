<?php

namespace App\Livewire\Admin\DoctorProfile;

use App\Models\Doctor;
use App\Models\DoctorProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Edit Doctor Profile')]
#[Layout('components.layouts.admin')]
class EditDoctorProfile extends Component
{
    public string $doctor_id = '';
    public string $qualification = '';
    public string $professional_bio = '';
    public string $membership = '';
    public string $social_media_link = '';
    public string $special_interest = '';
    public string $achievements = '';
    public string $language_spoken = '';
    public string $experience = '';
    public string $position = '';
    public string $university = '';
    public array $socialMediaLinks = [];


    public $profileId;

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
            'experience' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
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
        'position.max' => 'Position cannot exceed 255 characters.',
        'university.max' => 'University cannot exceed 255 characters.',
    ];

    public function mount(DoctorProfile $profile)
    {
        $this->profileId = $profile->id;
        $this->doctor_id = $profile->doctor_id;
        $this->qualification = $profile->qualification ?? '';
        $this->professional_bio = $profile->professional_bio ?? '';
        $this->membership = $profile->membership ?? '';
        $this->special_interest = $profile->special_interest ?? '';
        $this->experience = $profile->experience ?? '';
        $this->position = $profile->position ?? '';
        $this->university = $profile->university ?? '';

        // Parse achievements and languages
        if (is_array($profile->achievements)) {
            $this->achievements = implode(", ", $profile->achievements);
        } else {
            $this->achievements = $profile->achievements ?? '';
        }
        
        if (is_array($profile->language_spoken)) {
            $this->language_spoken = implode(", ", $profile->language_spoken);
        } else {
            $this->language_spoken = $profile->language_spoken ?? '';
        }
        
        // Parse social media links
        $this->socialMediaLinks = [];
        if (is_array($profile->social_media_link) && count($profile->social_media_link) > 0) {
            foreach ($profile->social_media_link as $link) {
                if (is_string($link) && strpos($link, ':') !== false) {
                    [$platform, $url] = explode(':', $link, 2);
                    $this->socialMediaLinks[] = ['platform' => trim($platform), 'url' => trim($url)];
                } else {
                    $platform = $this->detectPlatform($link);
                    $this->socialMediaLinks[] = ['platform' => $platform, 'url' => $link];
                }
            }
        }
        
        // Add at least one empty link if none exist
        if (empty($this->socialMediaLinks)) {
            $this->socialMediaLinks = [['platform' => '', 'url' => '']];
        }
    }

    public function save()
    {
        $this->validate();

        try {
            // Check if the selected doctor already has a profile (other than this one)
            $existingProfile = DoctorProfile::where('doctor_id', $this->doctor_id)
                ->where('id', '!=', $this->profileId)
                ->first();
                
            if ($existingProfile) {
                session()->flash('error', 'This doctor already has a profile. A doctor can only have one profile.');
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
                $links = explode(',', $this->social_media_link);
                foreach ($links as $link) {
                    $link = trim($link);
                    if (!empty($link)) {
                        $platform = $this->detectPlatform($link);
                        $formattedLinks[] = $platform . ':' . $link;
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
            
            // Find and update the doctor profile
            $profile = DoctorProfile::findOrFail($this->profileId);
            $profile->doctor_id = $this->doctor_id;
            $profile->qualification = $this->qualification;
            $profile->professional_bio = $this->professional_bio;
            $profile->membership = $this->membership;
            $profile->social_media_link = $socialMediaLinks;
            $profile->special_interest = $this->special_interest;
            $profile->achievements = $achievements;
            $profile->language_spoken = $languages;
            $profile->experience = $this->experience;
            $profile->position = $this->position;
            $profile->university = $this->university;

            $profile->save();
            
            session()->flash('success', 'Doctor profile updated successfully!');
            return redirect()->route('admin.doctor-profiles.list');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update profile: ' . $e->getMessage());
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

    public function render()
    {
        // Include the current doctor in the list (even if they already have a profile)
        // plus doctors who don't have profiles yet
        $doctors = Doctor::with('user')
                    ->where(function($query) {
                        $query->where('doctors.id', $this->doctor_id)
                              ->orWhereDoesntHave('profiles');
                    })
                    ->where('doctors.status', true)
                    ->join('users', 'doctors.user_id', '=', 'users.id')
                    ->join('departments', 'doctors.department_id', '=', 'departments.id')
                    ->select('doctors.id', 'users.name', 'departments.name as department')
                    ->get()
                    ->map(function ($doctor) {
                        return [
                            'id' => $doctor->id,
                            'name' => $doctor->name,
                            'department' => $doctor->department
                        ];
                    });
                    
        return view('livewire.admin.doctor-profile.edit-doctor-profile', [
            'doctors' => $doctors
        ]);
    }
}
