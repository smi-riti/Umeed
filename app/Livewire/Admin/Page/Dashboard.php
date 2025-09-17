<?php

namespace App\Livewire\Admin\Page;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

#[Layout('components.layouts.admin')]
class Dashboard extends Component
{
    public function getTotalAppointments()
    {
        return Appointment::count();
    }
    
    public function getTotalDoctors()
    {
        return Doctor::where('status', true)->count();
    }
    
    public function getTotalPatients()
    {
        return Patient::count();
    }
    
    public function getTotalPendingAppointments()
    {
        return Appointment::where('status', 'pending')->count();
    }
    
    public function getRecentAppointments()
    {
        return Appointment::with(['patient', 'doctor.user', 'doctor.department'])
            ->latest()
            ->take(5)
            ->get();
    }
    
    public function getAppointmentsByStatus()
    {
        return [
            'pending' => Appointment::where('status', 'pending')->count(),
            'scheduled' => Appointment::where('status', 'scheduled')->count(),
            'completed' => Appointment::where('status', 'completed')->count(),
            'cancelled' => Appointment::where('status', 'cancelled')->count()
        ];
    }
    
    public function getAppointmentsByDay()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        
        return Appointment::select(DB::raw('DATE(appointment_date) as date'), DB::raw('count(*) as count'))
            ->whereBetween('appointment_date', [$startOfWeek, $endOfWeek])
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->mapWithKeys(function ($item) {
                return [Carbon::parse($item->date)->format('D') => $item->count];
            });
    }
    
    public function getTopDoctors()
    {
        return Doctor::withCount(['appointments' => function($query) {
                $query->where('appointment_date', '>=', Carbon::now()->subDays(30));
            }])
            ->with(['user', 'department'])
            ->where('status', true)
            ->orderByDesc('appointments_count')
            ->take(5)
            ->get();
    }
    
    public function getRecentPatients()
    {
        return Patient::latest()
            ->take(5)
            ->get();
    }
    
    public function render()
    {
        return view('livewire.admin.page.dashboard', [
            'totalAppointments' => $this->getTotalAppointments(),
            'totalDoctors' => $this->getTotalDoctors(),
            'totalPatients' => $this->getTotalPatients(),
            'pendingAppointments' => $this->getTotalPendingAppointments(),
            'recentAppointments' => $this->getRecentAppointments(),
            'appointmentsByStatus' => $this->getAppointmentsByStatus(),
            'appointmentsByDay' => $this->getAppointmentsByDay(),
            'topDoctors' => $this->getTopDoctors(),
            'recentPatients' => $this->getRecentPatients(),
        ]);
    }
}
