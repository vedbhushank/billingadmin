<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/add-form', function () {
    return view('add-form');
});
Route::get('/manage-form', function () {
    return view('manage-form');
});
Route::get('/add-manage-form', function () {
    return view('add-manage-form');
});
Route::get('/editor', function () {
    return view('editor');
});


// Superadmin routes

Route::get('/superadmin', function () {
    return view('superadmin.index');
});
Route::get('/superadmin/forgot-password', function () {
    return view('superadmin.forgot-password');
});
Route::get('/superadmin/create-password', function () {
    return view('superadmin.create-password');
});
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
});
Route::get('/superadmin/add-client-profile', function () {
    return view('superadmin.add-client-profile');
});
Route::get('/superadmin/manage-client-profile', function () {
    return view('superadmin.manage-client-profile');
});
Route::get('/superadmin/create-business-category', function () {
    return view('superadmin.create-business-category');
});
Route::get('/superadmin/create-sub-category', function () {
    return view('superadmin.create-sub-category');
});