<?php

namespace App\Livewire\Admin\Publication;

use App\Models\Publication;
use App\Models\DoctorProfile;
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

    public function delete($publicationId)
    {
        try {
            $publication = Publication::findOrFail($publicationId);
            $publication->delete();
            
            session()->flash('success', 'Publication deleted successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete publication.');
        }
    }

    public function render()
    {
        $publications = Publication::query()
            ->with('doctorProfile')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('authors', 'like', '%' . $this->search . '%')
                      ->orWhere('journal', 'like', '%' . $this->search . '%')
                      ->orWhereHas('doctorProfile', function ($q) {
                          $q->where('name', 'like', '%' . $this->search . '%');
                      });
            })
            ->when($this->filterDoctorId, function ($query) {
                $query->where('doctor_id', $this->filterDoctorId);
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        $doctorProfiles = DoctorProfile::orderBy('name')->get();

        return view('livewire.admin.publication.list-publication', [
            'publications' => $publications,
            'doctorProfiles' => $doctorProfiles
        ]);
    }
}