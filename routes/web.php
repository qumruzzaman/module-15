<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/projects', [ContactController::class, 'projects'])->name('projects');
Route::get('/resume', [ContactController::class, 'resume'])->name('resume');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact'); // Updated route name
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/contact/confirmation/{submission}', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');
