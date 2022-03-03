<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('welcome')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
   /**
   * Logout Route
   */
    Route::get('/logout', [HomeController::class,'logout'])->name('logout');
    Route::resource('post',PostController::class);
    Route::get('/friends', [HomeController::class,'friendsPage'])->name('friends');
    Route::get('/stories', [HomeController::class,'storiesPage'])->name('stories');
    Route::get('/groups', [HomeController::class,'groupsPage'])->name('groups');
    Route::get('/profile', [HomeController::class,'profilePage'])->name('profile');
    Route::get('/emailBox', [HomeController::class,'emailBox'])->name('emailbox');
    Route::get('/emailOpen', [HomeController::class,'emailOpen'])->name('emailopen');
    Route::get('/messages', [HomeController::class,'messages'])->name('messages');
});


