<?php

namespace App\Livewire\Admin\Doctor;

use App\Models\Doctor;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Doctor List')]
#[Layout('components.layouts.admin')]
class ListDoctor extends Component
{
    use WithPagination;

    public string $search = '';
    public string $departmentFilter = '';
    public string $statusFilter = '';
    public int $perPage = 10;

    protected $listeners = ['confirmed-delete' => 'deleteDoctor'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingDepartmentFilter()
    {
        $this->resetPage();
    }

    public function updatingStatusFilter()
    {
        $this->resetPage();
    }

    public function confirmDelete($doctorId)
    {
        $doctor = Doctor::with('user')->find($doctorId);
        
        if (!$doctor) {
            session()->flash('error', 'Doctor not found.');
            return;
        }

        $this->dispatch('showDeleteConfirmation', [
            'id' => $doctorId,
            'title' => 'Delete Doctor',
            'message' => "Are you sure you want to delete Dr. {$doctor->user->name}? This action cannot be undone.",
            'confirmText' => 'Delete Doctor',
            'cancelText' => 'Cancel'
        ]);
    }

    public function deleteDoctor($data)
    {
        try {
            $doctor = Doctor::find($data['id']);
            
            if (!$doctor) {
                session()->flash('error', 'Doctor not found.');
                return;
            }

            $doctorName = $doctor->user->name;
            
            // Delete the user account as well (cascade will handle doctor record)
            $doctor->user->delete();
            
            session()->flash('success', "Dr. {$doctorName} has been deleted successfully.");
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete doctor. Please try again.');
        }
    }

    public function toggleStatus($doctorId)
    {
        try {
            $doctor = Doctor::find($doctorId);
            
            if (!$doctor) {
                session()->flash('error', 'Doctor not found.');
                return;
            }

            $doctor->update(['status' => !$doctor->status]);
            
            $status = $doctor->status ? 'activated' : 'deactivated';
            session()->flash('success', "Doctor has been {$status} successfully.");
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update doctor status. Please try again.');
        }
    }

    public function render()
    {
        $doctors = Doctor::with(['user', 'department'])
            ->when($this->search, function ($query) {
                $query->whereHas('user', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->departmentFilter, function ($query) {
                $query->where('department_id', $this->departmentFilter);
            })
            ->when($this->statusFilter !== '', function ($query) {
                $query->where('status', $this->statusFilter);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        $departments = Department::where('status', true)->get();

        return view('livewire.admin.doctor.list-doctor', [
            'doctors' => $doctors,
            'departments' => $departments
        ]);
    }
}
