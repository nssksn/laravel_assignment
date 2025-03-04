<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ReplyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);


/*
Route::middleware('auth')->group(function(){
    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/', [TweetController::class, 'store'])->name('tweets.store');
    Route::get('/{id}', [TweetController::class, 'show'])->name('tweets.show');
});
*/
/*
Route::middleware('auth')->group(function(){
    Route::resource('tweets', TweetController::class);
});
*/
Route::middleware('auth')->group(function(){
    Route::resources([
    'tweets' => TweetController::class,
    'replies' => ReplyController::class,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
