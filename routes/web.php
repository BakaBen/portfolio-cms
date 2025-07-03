<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ProjectController::class, 'profile'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('projects', [ProjectController::class, 'projectSet'])->name('projects.index');    
    Route::resource('projects', ProjectController::class)->except(['index']);
    Route::resource('categories', CategoryController::class);
    Route::get('/trash', [ProjectController::class, 'trash'])->name('projects.trash');
    Route::post('projects/{project}/restore', [ProjectController::class, 'restore'])->name('projects.restore');
    Route::delete('projects/{project}/force-delete', [ProjectController::class, 'forceDelete'])->name('projects.force-delete');
});

require __DIR__.'/auth.php';
