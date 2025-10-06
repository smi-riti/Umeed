<?php

namespace App\Livewire\Admin\DoctorProfile;

use App\Models\DoctorProfile;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Doctor Profiles')]
#[Layout('components.layouts.admin')]
class ListDoctorProfile extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sortBy = 'name';
    public string $sortDirection = 'asc';
    public int $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'name'],
        'sortDirection' => ['except' => 'asc'],
        'perPage' => ['except' => 10]
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }

    public function confirmDelete($profileId)
    {
        // Direct deletion without confirmation
        $this->delete($profileId);
    }

    public function delete($profileId)
    {
        try {
            $profile = DoctorProfile::findOrFail($profileId);
            $doctorName = $profile->doctor->user->name ?? 'Unknown';
            
            // Perform the delete operation directly
            if($profile->delete()) {
                session()->flash('success', "Doctor profile for '{$doctorName}' deleted successfully!");
            } else {
                session()->flash('error', 'Failed to delete doctor profile.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete doctor profile: ' . $e->getMessage());
        }
        
        // Refresh data
        $this->resetPage();
    }
    
    // Direct deletion without confirmation

    public function render()
    {
        $query = DoctorProfile::query()->with('doctor.user'); // Eager load the doctor relationship
        
        // Apply search filters if any
        if ($this->search) {
            $query->where(function($q) {
                $q->whereHas('doctor.user', function ($subQuery) {
                    $subQuery->where('name', 'like', '%' . $this->search . '%');
                })
                ->orWhere('qualification', 'like', '%' . $this->search . '%')
                ->orWhere('special_interest', 'like', '%' . $this->search . '%');
            });
        }
        
        // Apply sorting
        if ($this->sortBy === 'name') {
            $query->select('doctor_profiles.*')
                  ->join('doctors', 'doctor_profiles.doctor_id', '=', 'doctors.id')
                  ->join('users', 'doctors.user_id', '=', 'users.id')
                  ->orderBy('users.name', $this->sortDirection);
        } else {
            $query->orderBy($this->sortBy, $this->sortDirection);
        }
        
        $profiles = $query->paginate($this->perPage);

        return view('livewire.admin.doctor-profile.list-doctor-profile', [
            'profiles' => $profiles
        ]);
    }
}