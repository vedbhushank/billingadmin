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


//admin routes
Route::get('/add-client-profile', function () {
    return view('add-client-profile');
});
Route::get('/manage-client-profile', function () {
    return view('manage-client-profile');
});
Route::get('/add-sale-party', function () {
    return view('add-sale-party');
});
Route::get('/manage-sale-party', function () {
    return view('manage-sale-party');
});
Route::get('/add-purchase-party', function () {
    return view('add-purchase-party');
});
Route::get('/manage-purchase-party', function () {
    return view('manage-purchase-party');
});
Route::get('/add-product', function () {
    return view('add-product');
});
Route::get('/manage-product', function () {
    return view('manage-product');
});
Route::get('/generate-invoice', function () {
    return view('generate-invoice');
});
Route::get('/manage-invoice', function () {
    return view('manage-invoice');
});


// Superadmin routes
Route::get('/superadmin', function () {
    return view('superadmin.index');
});
Route::get('/superadmin/form-elements', function () {
    return view('superadmin.form-elements');
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
Route::get('/superadmin/create-user', function () {
    return view('superadmin.create-user');
});
Route::get('/superadmin/user-role', function () {
    return view('superadmin.user-role');
});
Route::get('/superadmin/financial-year', function () {
    return view('superadmin.financial-year');
});
Route::get('/superadmin/state', function () {
    return view('superadmin.state');
});
Route::get('/superadmin/city', function () {
    return view('superadmin.city');
});
Route::get('/superadmin/unit', function () {
    return view('superadmin.unit');
});
Route::get('/superadmin/size', function () {
    return view('superadmin.size');
});
Route::get('/superadmin/hsn-code', function () {
    return view('superadmin.hsn-code');
});


//templates
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