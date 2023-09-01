<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [AdminController::class, 'showUserCount'])->name('admin.dashboard');
    // Route::get('/admin', [PostController::class, 'showPostCount'])->name('admin.dashboard');
});

// Route::get('/admin', [AdminController::class, 'showUserCount'])->middleware(['auth']);
