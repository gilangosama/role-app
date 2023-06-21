<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post; 
use App\Models\User; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('post', PostController::class);
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/post/create', [PostController::class, 'create'])->name('new-post');
    Route::post('/post/store', [PostController::class, 'store'])->name('store');
// Contoh rute untuk fungsi edit dan destroy
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


    // Route::post('/post/update', [PostController::class, 'update'])->name('update');
    // Route::post('/post/destroy', [PostController::class, 'destroy'])->name('destroy');

    // Route::get('/users/{id}', [UserController::class, 'show']);
    // Route::delete('/users/{id}', [UserController::class, 'destroy']);
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
