<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AttendaceController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/beneficiary', [BeneficiaryController::class, 'index'])->name('beneficiary');
Route::get('/impact', [ImpactController::class, 'index'])->name('impact');
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::get('/attendance', [AttendaceController::class, 'index'])->name('attendance');
Route::get('/packages', [DistributionController::class, 'index'])->name('packages');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
