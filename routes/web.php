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
use App\Http\Controllers\CardController;
use App\Http\Controllers\AttachedCards;
use App\Http\Controllers\DistributedCards;
use App\Http\Controllers\AgentAuthController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
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
    if(auth()->user()){
        auth()->user()->assignRole('admin');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/mm', function () {
    return view('settings.users.edit', ['articleName' => 'Article 1']);
});
Route::get('/dd', [UserController::class,'edit']);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    //PROTECTED ROUTES





    Route::resource('profiles', ProfileController::class);

    Route::group(['middleware' => ['auth']], function() {
    Route::get('/userprofile/{id}', [ProfileControlle::class, 'getprofile'])->name('userprofile');

Route::resource('category', CategoryController::class);
Route::resource('package', PackageController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('agent', CommunityController::class);
Route::resource('company', CompanyController::class);
Route::get('/companyupdate/{id}', [CompanyController::class, 'show'])->name('show');
Route::get('/showcat/{id}', [CategoryController::class, 'show'])->name('show');
Route::get('/showpackage/{id}', [PackageController::class, 'show'])->name('showpackage');
Route::put('/categoryupdate', [CategoryController::class, 'update'])->name('show');
Route::delete('/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('deletecategory');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/beneficiary', [BeneficiaryController::class, 'index'])->name('beneficiary');
Route::get('/impact', [ImpactController::class, 'index'])->name('impact');
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::get('/attendance', [AttendaceController::class, 'index'])->name('attendance');
Route::get('/packages', [DistributionController::class, 'index'])->name('packages');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

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
Route::post('/roles', [RoleController::class, 'store'])->name('roles');
// Route::post('/register-user', [UserController::class, 'store'])->name('register');
Route::put('/edituser/{id}', [UserController::class, 'update'])->name('edituser');
Route::resource('beneficial', BeneficiaryController::class);
   
    Route::put('/updatepassword/{id}', [UserController::class, 'updateuserPassword'])->name('updatepassword');
    Route::get('/edit-role/{id}', [RoleController::class, 'edit'])->name('edit-role');
    Route::put('/updaterole', [RoleController::class, 'update'])->name('updaterole');
    Route::delete('/deleterole/{id}', [RoleController::class, 'destroy'])->name('deleterole');
    Route::post('/createrole', [RoleController::class, 'store'])->name('createrole');
  
});


// RESOUCE ROUTES 
//"



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


