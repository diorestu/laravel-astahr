<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/staff/print', 'PdfController@printStaff')->name('staff-print');

Route::middleware(['auth'])
    ->group(function () {
    Route::resource('staff', 'StaffController');
    Route::resource('project', 'ProjectController');
    Route::resource('department', 'DepartmentController');
    Route::resource('letter', 'LetterController');
    Route::resource('kwitansi', 'KwitansiController');
    Route::resource('eksternal', 'SuratEksternalController');
    Route::resource('pengumuman', 'PengumumanController');
    Route::resource('peringatan', 'SuratPeringatanController');
    Route::resource('keterangan', 'SuratKeteranganController');
    
    });

Route::get('/logged-in-devices', 'LoggedInDeviceManager@index')
    ->name('logged-in-devices.list')
    ->middleware('auth');

Route::get('/logout/all', 'LoggedInDeviceManager@logoutAllDevices')
    ->name('logged-in-devices.logoutAll')
    ->middleware('auth');

Route::get('/logout/{device_id}', 'LoggedInDeviceManager@logoutDevice')
    ->name('logged-in-devices.logoutSpecific')
    ->middleware('auth');

Auth::routes();



