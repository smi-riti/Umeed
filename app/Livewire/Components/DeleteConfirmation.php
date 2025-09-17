<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DeleteConfirmation extends Component
{
    public bool $show = false;
    public string $title = 'Confirm Deletion';
    public string $message = 'Are you sure you want to delete this item? This action cannot be undone.';
    public string $confirmText = 'Delete';
    public string $cancelText = 'Cancel';
    public string $errorMessage = '';
    public mixed $itemId = null;

    protected $listeners = ['showDeleteConfirmation', 'hideDeleteConfirmation'];

    public function showDeleteConfirmation($data = [])
    {
        $this->show = true;
        $this->itemId = $data['id'] ?? null;
        $this->title = $data['title'] ?? 'Confirm Deletion';
        $this->message = $data['message'] ?? 'Are you sure you want to delete this item? This action cannot be undone.';
        $this->confirmText = $data['confirmText'] ?? 'Delete';
        $this->cancelText = $data['cancelText'] ?? 'Cancel';
        $this->errorMessage = $data['errorMessage'] ?? '';
    }

    public function hideDeleteConfirmation()
    {
        $this->reset(['show', 'itemId', 'errorMessage']);
        $this->title = 'Confirm Deletion';
        $this->message = 'Are you sure you want to delete this item? This action cannot be undone.';
        $this->confirmText = 'Delete';
        $this->cancelText = 'Cancel';
    }

    public function confirmDelete()
    {
        $this->dispatch('confirmed-delete', ['id' => $this->itemId]);
        $this->hideDeleteConfirmation();
    }

    public function cancelDelete()
    {
        $this->hideDeleteConfirmation();
    }

    public function render()
    {
        return view('livewire.components.delete-confirmation');
    }
}