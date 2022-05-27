<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\FrontendIndex;
use App\Http\Livewire\UserList;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/', FrontendIndex::class)->name('home');

Route::resource('users', UserController::class)->scoped(['user' => 'email']);
Route::resource('categories', CategoryController::class)->scoped(['category' => 'slug']);
Route::resource('tags', TagController::class)->scoped(['tag' => 'slug']);
Route::resource('posts', PostController::class)->scoped(['post' => 'slug']);


Route::get('/user', UserList::class);
