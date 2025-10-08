<?php

namespace App\Livewire\Admin\Department;

use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;

#[Title('Department List')]
#[Layout('components.layouts.admin')]
class DepartmentList extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sortField = 'name';
    public string $sortDirection = 'asc';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }
   

    public function confirmDelete(int $id): void
    {
        $department = Department::findOrFail($id);
        
        if (!$department->canBeDeleted()) {
            $this->dispatch('showDeleteConfirmation', [
                'id' => $id,
                'title' => 'Cannot Delete Department',
                'errorMessage' => 'Cannot delete department because it has ' . $department->doctors_count . ' associated doctor(s).'
            ]);
            return;
        }

        $this->dispatch('showDeleteConfirmation', [
            'id' => $id,
            'title' => 'Delete Department',
            'message' => "Are you sure you want to delete the department '{$department->name}'? This action cannot be undone.",
            'confirmText' => 'Delete Department',
            'cancelText' => 'Cancel'
        ]);
    }

    #[On('confirmed-delete')]
    public function delete(array $data): void
    {
        $id = $data['id'];
        
        try {
            $department = Department::findOrFail($id);
            
            if ($department->canBeDeleted()) {
                $name = $department->name;
                $department->delete();
                session()->flash('message', "Department '{$name}' deleted successfully.");
            } else {
                session()->flash('error', 'Cannot delete department because it has associated doctors.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while deleting the department.');
        }
    }

    public function toggleStatus(int $id): void
    {
        try {
            $department = Department::findOrFail($id);
            $department->update(['status' => !$department->status]);
            
            $status = $department->status ? 'activated' : 'deactivated';
            session()->flash('message', "Department '{$department->name}' {$status} successfully.");
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while updating the department status.');
        }
    }

    public function render()
    {
        $query = Department::query()
            ->withCount('doctors')
            ->when($this->search, function ($query) {
                return $query->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('slug', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection);

        $departments = $query->paginate(10);

        return view('livewire.admin.department.department-list', compact('departments'));
    }
}