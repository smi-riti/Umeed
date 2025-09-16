<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Public\Homepage;

Route::get('/', Homepage::class)->name('home');
