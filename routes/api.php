<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AgentAuthController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendanceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Public API routes


Route::patch('/usercard', [CardController::class, 'update'])->name('usercard');
Route::post('/card/agent_login', [AgentAuthController::class, 'checkagent']);
Route::get('/card/get_id', [BeneficiaryController::class, 'fetchid']);

///Prodcted API AUTH


Route::resource('usercard', BeneficiaryController::class);
// Route::post('/card/scan/agent_login', [AgentAuthController::class, 'checkagent']);

// Route::group(['middleware' =>['auth:sanctum']], function () {
    // Route::get('/card/agent_details/{agent}', [AgentAuthController::class, 'index'])->name('index');
    Route::middleware('auth:sanctum')->group(function () {
    Route::post('/card/scan', [CardController::class, 'scan']);
    Route::get('/training/create_attendance/{agent_id}', [AttendanceController::class, 'store']);    
    Route::get('/company/{company_id}', [CompanyController::class, 'show']);
    Route::get('/card/agent_details/{id}', [AgentAuthController::class, 'store']); 
    Route::post('/card/attach_card', [BeneficiaryController::class, 'attach']);
    Route::get('/card/agent_details/{id}', [AgentAuthController::class, 'show']);
    Route::get('/training/get_training/{id}', [TrainingController::class, 'trainings']);
    // cards/agent_details/ 
    // $token = $request->user()->createToken($request->token_name);
 
    // return ['token' => $token->plainTextToken];
});
