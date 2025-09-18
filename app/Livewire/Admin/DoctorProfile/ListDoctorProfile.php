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

    public function delete($profileId)
    {
        try {
            $profile = DoctorProfile::findOrFail($profileId);
            $profile->delete();
            
            session()->flash('success', 'Doctor profile deleted successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete doctor profile.');
        }
    }

    public function render()
    {
        $profiles = DoctorProfile::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('qualification', 'like', '%' . $this->search . '%')
                      ->orWhere('special_interest', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin.doctor-profile.list-doctor-profile', [
            'profiles' => $profiles
        ]);
    }
}