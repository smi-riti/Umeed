<?php

namespace App\Livewire\Admin\Publication;

use App\Models\Publication;
use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Publications')]
#[Layout('components.layouts.admin')]
class ListPublication extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sortBy = 'title';
    public string $sortDirection = 'asc';
    public int $perPage = 10;
    public string $filterDoctorId = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'title'],
        'sortDirection' => ['except' => 'asc'],
        'perPage' => ['except' => 10],
        'filterDoctorId' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterDoctorId()
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

    public function confirmDelete($publicationId)
    {
        // Direct deletion without confirmation
        $this->delete($publicationId);
    }

    public function delete($publicationId)
    {
        try {
            $publication = Publication::findOrFail($publicationId);
            $publicationTitle = $publication->title ?? 'Unknown';
            
            // Perform the delete operation directly
            if($publication->delete()) {
                session()->flash('success', "Publication '{$publicationTitle}' deleted successfully!");
            } else {
                session()->flash('error', 'Failed to delete publication.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete publication: ' . $e->getMessage());
        }
        
        // Refresh data
        $this->resetPage();
    }
    
    // Direct deletion without confirmation

    public function render()
    {
        $publications = Publication::query()
            ->with('doctor.user')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('authors', 'like', '%' . $this->search . '%')
                      ->orWhere('journal', 'like', '%' . $this->search . '%')
                      ->orWhereHas('doctor.user', function ($q) {
                          $q->where('name', 'like', '%' . $this->search . '%');
                      });
            })
            ->when($this->filterDoctorId, function ($query) {
                $query->where('doctor_id', $this->filterDoctorId);
            })
            ->when($this->sortBy === 'name', function ($query) {
                // Handle sorting by doctor name through the relationship
                $query->join('doctors', 'publications.doctor_id', '=', 'doctors.id')
                      ->join('users', 'doctors.user_id', '=', 'users.id')
                      ->orderBy('users.name', $this->sortDirection)
                      ->select('publications.*');
            }, function ($query) {
                // Normal sorting for other fields
                $query->orderBy($this->sortBy, $this->sortDirection);
            })
            ->paginate($this->perPage);

        $doctorProfiles = Doctor::with('user')->get()->sortBy(function($doctor) {
            return $doctor->user->name;
        });

        return view('livewire.admin.publication.list-publication', [
            'publications' => $publications,
            'doctorProfiles' => $doctorProfiles
        ]);
    }
}