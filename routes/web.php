<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('{user}/posts', function (User $user) {
    $posts = $user->posts;
    return view('users.show', [
        'user' => $user, 
        'posts' => $posts
    ]);
} );

Route::get('posts/{post}', function (Post $post) {
    return view('posts/show', compact('post'));
});

Route::get('tags/{tag}/posts', function (Tag $tag) {
    $posts = $tag->posts;
    return view('tags.show', ['tag' => $tag, 'posts' => $posts]);
});
