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
    public $viewingPublication = null;
    public bool $showViewModal = false;

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

    // View Publication Modal
    public function viewPublication($publicationId)
    {
        $this->viewingPublication = Publication::with(['doctor.user'])->find($publicationId);
        $this->showViewModal = true;
    }

    public function closeViewModal()
    {
        $this->showViewModal = false;
        $this->viewingPublication = null;
    }

    public function confirmDelete($publicationId)
    {
        $this->delete($publicationId);
    }

    public function delete($publicationId)
    {
        try {
            $publication = Publication::findOrFail($publicationId);
            $publicationTitle = $publication->title ?? 'Unknown';
            
            if($publication->delete()) {
                session()->flash('success', "Publication '{$publicationTitle}' deleted successfully!");
            } else {
                session()->flash('error', 'Failed to delete publication.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete publication: ' . $e->getMessage());
        }
        
        $this->resetPage();
    }

    public function render()
    {
        $publications = Publication::query()
            ->with(['doctor.user'])
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('authors', 'like', '%' . $this->search . '%')
                      ->orWhere('journal', 'like', '%' . $this->search . '%')
                      ->orWhereHas('doctor.user', function ($userQuery) {
                          $userQuery->where('name', 'like', '%' . $this->search . '%');
                      });
                });
            })
            ->when($this->filterDoctorId, function ($query) {
                $query->where('doctor_id', $this->filterDoctorId);
            })
            ->when($this->sortBy === 'doctor_name', function ($query) {
                $query->join('doctors', 'publications.doctor_id', '=', 'doctors.id')
                      ->join('users', 'doctors.user_id', '=', 'users.id')
                      ->orderBy('users.name', $this->sortDirection)
                      ->select('publications.*');
            })
            ->when($this->sortBy !== 'doctor_name', function ($query) {
                $query->orderBy($this->sortBy, $this->sortDirection);
            })
            ->paginate($this->perPage);

        $doctors = Doctor::with('user')
            ->get()
            ->map(function ($doctor) {
                return [
                    'id' => $doctor->id,
                    'name' => $doctor->user->name ?? 'Unknown Doctor'
                ];
            })
            ->sortBy('name');

        return view('livewire.admin.publication.list-publication', [
            'publications' => $publications,
            'doctors' => $doctors
        ]);
    }
}