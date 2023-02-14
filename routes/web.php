<?php

use Illuminate\Support\Facades\Route;

//Frontend home
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Register start
Route::resource('users', \App\Http\Controllers\UserController::class);
//end user Register

//start role and permissions
Route::group(['middleware' => ['auth']], function () {
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
});
//end role and permissions

//user profile start
Route::resource('profile', \App\Http\Controllers\UserProfileController::class);
Route::resource('userlist', \App\Http\Controllers\UserListController::class);
Route::get('search/{id}', [App\Http\Controllers\UserListController::class, 'searchUniversity'])->name('searchUniversity');
//end user profile

// University
Route::resource('university', \App\Http\Controllers\UniversityController::class);

//University Search
Route::any('universities', [App\Http\Controllers\UniversityController::class, 'universities'])->name('university.ajax');

//File
Route::resource('file', \App\Http\Controllers\FileSendController::class);

//authority
Route::resource('authority', \App\Http\Controllers\AuthorityController::class);

//Test
Route::get('test', [App\Http\Controllers\UserListController::class, 'test'])->name('test');
