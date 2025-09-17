<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Public\Homepage;

use App\Livewire\Public\AboutPage;
use App\Livewire\Public\DoctorsPage;
use App\Livewire\Public\ServicesPage;
use App\Livewire\Public\ContactPage;
use App\Livewire\Public\BookingPage;

Route::get('/', Homepage::class)->name('home');

Route::get('/about', AboutPage::class)->name('about');
Route::get('/doctors', DoctorsPage::class)->name('doctors');
Route::get('/services', ServicesPage::class)->name('services');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/booking', BookingPage::class)->name('booking');
