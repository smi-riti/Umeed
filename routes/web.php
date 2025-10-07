<?php

use App\Livewire\Admin\Enquirie\EnquiryList;
use App\Livewire\Admin\Patient\ManagePatient;
use App\Livewire\Admin\Review\ReviewCreate;
use App\Livewire\Admin\Review\ReviewList;
use App\Livewire\Public\ViewDoctor;
use Illuminate\Support\Facades\Route;
use App\Livewire\Public\Homepage;

use App\Livewire\Public\AboutPage;
use App\Livewire\Public\DoctorsPage;
use App\Livewire\Public\ServicesPage;
use App\Livewire\Public\ContactPage;
use App\Livewire\Public\BookingPage;

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
use App\Livewire\Admin\DoctorProfile\ListDoctorProfile;
use App\Livewire\Admin\DoctorProfile\AddDoctorProfile;
use App\Livewire\Admin\DoctorProfile\EditDoctorProfile;
use App\Livewire\Admin\Publication\ListPublication;
use App\Livewire\Admin\Publication\AddPublication;
use App\Livewire\Admin\Publication\EditPublication;

Route::get('/', Homepage::class)->name('home');

Route::get("/storage-link", function(){
    \Artisan::call("storage:link");
    return "Storage link created successfully.";
});

Route::get('/about', AboutPage::class)->name('about');
Route::get('/doctors', DoctorsPage::class)->name('doctors');
Route::get('/services', ServicesPage::class)->name('services');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/booking', BookingPage::class)->name('booking');
Route::get('/doctors/{slug}',ViewDoctor::class)->name('view-doctor');


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

    // Doctor Profile routes
    Route::get('/doctor-profiles', ListDoctorProfile::class)->name('doctor-profiles.list');
    Route::get('/doctor-profiles/add', AddDoctorProfile::class)->name('doctor-profiles.add');
    Route::get('/doctor-profiles/edit/{profile}', EditDoctorProfile::class)->name('doctor-profiles.edit');

    // Publication routes
    Route::get('/publications', ListPublication::class)->name('publications.list');
    Route::get('/publications/add', AddPublication::class)->name('publications.add');
    Route::get('/publications/edit/{publication}', EditPublication::class)->name('publications.edit');

    // enquiry list
    Route::get('/enquiries', EnquiryList::class)->name('enquiries');

    //review create
    Route::get('/review', ReviewList::class)->name('review-create');

    //manage patients
    Route::get('/patients', ManagePatient::class)->name('patients');
});
