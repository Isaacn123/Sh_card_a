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
use App\Http\controllers\CardController;
use App\Http\controllers\AttachedCards;
use App\Http\controllers\DistributedCards;
use App\Http\controllers\AgentAuthController;
use App\Http\controllers\TrainingController;
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
Route::get('/usercard', [CardController::class, 'index'])->name('usercard');
Route::get('/attached', [AttachedCards::class, 'index'])->name('attached');
Route::get('/distribution', [DistributedCards::class, 'index'])->name('distribution');
Route::post('/addcard', [CardController::class, 'store'])->name('addcard');

Route::get('/agentLogin', [AgentAuthController::class, 'login'])->name('agentLogin');
Route::get('/registerAgent', [AgentAuthController::class, 'register'])->name('registerAgent');
Route::post('/create', [AgentAuthController::class, 'create'])->name('auth.create');
Route::post('/checkagent', [AgentAuthController::class, 'checkagent'])->name('auth.checkagent');
Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::post('/addtraining', [TrainingController::class, 'store'])->name('addtraining');

// RESOUCE ROUTES 

Route::resource('agent', CommunityController::class);
Route::resource('beneficial', BeneficiaryController::class);
Route::resource('card', BeneficiaryController::class);
Route::resource('trainings',TrainingController::class);
Route::resource('agent_login',AgentAuthController::class);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/agent/search/{name}', [App\Http\Controllers\AgentAuthController::class, 'search'])->name('search');

///adding authentication //
// composer require laravel/sanctum 
///adding migrations to our authentication
//php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
//php artisan migrate


