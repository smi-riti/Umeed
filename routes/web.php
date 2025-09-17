<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Public\Homepage;


use Illuminate\Support\Facades\Auth;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;    
use App\Livewire\Admin\Page\Dashboard;
use App\Livewire\Admin\Department\DepartmentList;
use App\Livewire\Admin\Department\DepartmentForm;
use App\Livewire\Admin\Doctor\ListDoctor;
use App\Livewire\Admin\Doctor\AddDoctor;
use App\Livewire\Admin\Doctor\EditDoctor;
use App\Livewire\Admin\Appointment\AppointmentList;
use App\Livewire\Admin\Appointment\AppointmentForm;
use App\Livewire\Admin\Appointment\EditAppointment;


Route::get('/', Homepage::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Admin routes with middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    
    // Department routes
    Route::get('/departments', DepartmentList::class)->name('departments.list');
    Route::get('/departments/add', DepartmentForm::class)->name('departments.add');
    Route::get('/departments/edit/{departmentId}', DepartmentForm::class)->name('departments.edit');
    
    // Doctor routes
    Route::get('/doctors', ListDoctor::class)->name('doctors.list');
    Route::get('/doctors/add', AddDoctor::class)->name('doctors.add');
    Route::get('/doctors/edit/{doctor}', EditDoctor::class)->name('doctors.edit');
    
    // Appointment routes
    Route::get('/appointments', AppointmentList::class)->name('appointments.list');
    Route::get('/appointments/add', AppointmentForm::class)->name('appointments.add');
    Route::get('/appointments/edit/{appointmentId}', EditAppointment::class)->name('appointments.edit');
});
