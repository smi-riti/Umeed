<?php

namespace App\Livewire\Admin\Review;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class ReviewList extends Component
{
    use WithPagination;

    public $patient_name;
    public $patient_location;
    public $review;
    public $rating = 5;
    public $treatment_type;
    public $status = true;

    // For review list
    public $search = '';
    public $statusFilter = '';

    protected $rules = [
        'patient_name' => 'required|string|max:255',
        'patient_location' => 'required|string|max:255',
        'review' => 'required|string|min:10',
        'rating' => 'required|integer|min:1|max:5',
        'treatment_type' => 'nullable|string|max:255',
        'status' => 'required|boolean',
    ];

    protected $messages = [
        'patient_name.required' => 'Patient name is required.',
        'patient_location.required' => 'Patient location is required.',
        'review.required' => 'Review content is required.',
        'review.min' => 'Review must be at least 10 characters long.',
        'rating.min' => 'Rating must be at least 1 star.',
        'rating.max' => 'Rating cannot exceed 5 stars.',
    ];

    public function save()
    {
        $this->validate();

        try {
            Testimonial::create([
                'patient_name' => $this->patient_name,
                'patient_location' => $this->patient_location,
                'review' => $this->review,
                'rating' => $this->rating,
                'treatment_type' => $this->treatment_type,
                'status' => $this->status,
            ]);

            session()->flash('success', 'Testimonial created successfully!');
            
            // Reset form
            $this->reset(['patient_name', 'patient_location', 'review', 'rating', 'treatment_type', 'status']);
            $this->rating = 5; // Reset rating to default
            $this->status = true; // Reset status to default

        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create testimonial: ' . $e->getMessage());
        }
    }

    public function toggleStatus($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->update([
                'status' => !$testimonial->status
            ]);

            session()->flash('success', 'Testimonial status updated successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update testimonial status: ' . $e->getMessage());
        }
    }

    public function deleteTestimonial($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->delete();

            session()->flash('success', 'Testimonial deleted successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete testimonial: ' . $e->getMessage());
        }
    }

    public function getTestimonialsProperty()
    {
        $query = Testimonial::query();

        // Apply search filter
        if ($this->search) {
            $query->where(function($q) {
                $q->where('patient_name', 'like', '%' . $this->search . '%')
                  ->orWhere('patient_location', 'like', '%' . $this->search . '%')
                  ->orWhere('treatment_type', 'like', '%' . $this->search . '%')
                  ->orWhere('review', 'like', '%' . $this->search . '%');
            });
        }

        // Apply status filter
        if ($this->statusFilter === 'active') {
            $query->where('status', true);
        } elseif ($this->statusFilter === 'inactive') {
            $query->where('status', false);
        }

        return $query->latest()->paginate(10);
    }

    public function render()
    {
        return view('livewire.admin.review.review-list', [
            'testimonials' => $this->testimonials
        ])->layout('components.layouts.admin');
    }
}