<?php

use App\Livewire\Blogdetails;
use App\Livewire\ShowHome;
use App\Livewire\ShowBlog;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/blog',ShowBlog::class)->name('blog');
Route::get('/blog-details/{slug}',Blogdetails::class)->name('blogDetail');
