<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\AdminprofileController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin profile routes 
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/adminprofile', [AdminprofileController::class, 'show'])->name('admin.profile.show');
    Route::patch('/adminprofile', [AdminprofileController::class, 'update'])->name('admin.profile.update');
    Route::put('/adminprofile', [AdminprofileController::class, 'updatePassword'])->name('admin.password.update');
    Route::delete('/adminprofile', [AdminprofileController::class, 'destroy'])->name('admin.profile.delete');
});

Route::get('admin.dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
Route::get('/adminprofile', [AdminprofileController::class, 'adminprofile'])->middleware(['auth', 'admin'])->name('adminprofile');


// admin control pages
Route::get('/messages', [MessagesController::class, 'messages'])->middleware(['auth', 'admin'])->name('messages');
Route::get('/posts', [BlogPostsController::class, 'blogposts'])->middleware(['auth', 'admin'])->name('posts');
Route::get('/subscribers', [SubscribersController::class, 'subscribers'])->middleware(['auth', 'admin'])->name('subscribers');
Route::get('/users', [UserListController::class, 'userlist'])->middleware(['auth', 'admin'])->name('users');


// admin controll list of users 
Route::get('/users', [UserListController::class, 'index'])->middleware(['auth', 'admin'])->name('users');
Route::post('/users/change-role', [UserListController::class, 'changeRole'])->middleware(['auth', 'admin']);
Route::post('/users/delete-user', [UserListController::class, 'deleteUser'])->middleware(['auth', 'admin']);



require __DIR__.'/auth.php';
