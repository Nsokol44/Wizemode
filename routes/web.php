<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    return view('livewire.homepage', [
        'posts' => $posts
    ]);
});
Route::get('/blog/{slug}', function($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('blog.show', compact('post'));
})->name('blog.show');

Route::get('/blog', function() {
    $posts = Post::latest()->paginate(10);
    return view('blog.index', compact('posts'));
})->name('blog.index');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
