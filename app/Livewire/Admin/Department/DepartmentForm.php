<?php

namespace App\Livewire\Admin\Department;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Department;
use Illuminate\Validation\Rule;

#[Title('Department Form')]
#[Layout('components.layouts.admin')]
class DepartmentForm extends Component
{                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('boolean')]
    public bool $status = true;

    public ?int $editingId = null;
    public bool $isEditing = false;

    public function mount($departmentId = null): void
    {
        if ($departmentId) {
            $department = Department::findOrFail($departmentId);
            $this->editingId = $department->id;
            $this->name = $department->name;
            $this->status = $department->status;
            $this->isEditing = true;
        }
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('departments', 'name')->ignore($this->editingId)
            ],
            'status' => 'boolean'
        ];
    }

    public function save(): void
    {
        $this->validate();

        try {
            if ($this->isEditing) {
                $department = Department::findOrFail($this->editingId);
                $department->update([
                    'name' => trim($this->name),
                    'status' => $this->status,
                ]);
                $message = 'Department updated successfully.';
            } else {
                Department::create([
                    'name' => trim($this->name),
                    'status' => $this->status,
                ]);
                $message = 'Department created successfully.';
            }

            session()->flash('message', $message);
            $this->redirectRoute('admin.departments.list');
        } catch (\Exception $e) {
            $this->addError('general', 'An error occurred while saving the department.');
        }
    }

    public function cancel(): void
    {
        $this->redirectRoute('admin.departments.list', navigate: true);
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'status', 'editingId', 'isEditing']);
        $this->status = true;
    }

    public function render()
    {
        return view('livewire.admin.department.department-form');
    }
}