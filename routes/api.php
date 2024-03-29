<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AgentAuthController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Agentprofile;
use App\Http\Controllers\AgentBeneficiary;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\FarmerAssessmentController;
use App\Http\Controllers\DistributionController;

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
Route::get('/card/check_id', [BeneficiaryController::class, 'checkid']);
Route::get('/form/get_assessment_id', [AssessmentController::class, 'fetchid']);
Route::get('/card/get_packages/{id}', [PackageController::class, 'apiPackages']);
Route::post('/card/package_distribution/{id}', [PackageController::class, 'distribution']);
Route::get('/card/search/{name}/{agent_id}', [AgentAuthController::class, 'search']);
Route::get('/card/check_id/{id}', [BeneficiaryController::class, 'checkid']);

///Prodcted API AUTH


Route::resource('usercard', BeneficiaryController::class);
// Route::post('/card/scan/agent_login', [AgentAuthController::class, 'checkagent']);

// Route::group(['middleware' =>['auth:sanctum']], function () {
    // Route::get('/card/agent_details/{agent}', [AgentAuthController::class, 'index'])->name('index');
    https://padshareapp.com/api/card/update_agent/

    Route::middleware('auth:sanctum')->group(function () {
        
    Route::get('/card/distribution_metrics/{agent_id}', [DistributionController::class, 'distribution']);
    Route::get('/card/scan_summary/{agent_id}', [DistributionController::class, 'scan_summary']);
    Route::patch('/card/update_agent/{agent_id}', [Agentprofile::class, 'update']);
    Route::post('/card/create_beneficiary/{agent_id}', [AgentBeneficiary::class, 'store']);
    Route::post('/agent/create_assessment/{agent_id}', [AssessmentController::class, 'create']);
    Route::post('/agent/create_farmer_assessment/{agent_id}', [FarmerAssessmentController::class, 'create']);
    Route::post('/card/scan', [CardController::class, 'scan']);
    Route::post('/training/create_attendance/{agent_id}', [AttendanceController::class, 'store']); 
    Route::get('/company/{company_id}', [CompanyController::class, 'show']);
    Route::get('/card/agent_details/{id}', [AgentAuthController::class, 'store']); 
    Route::post('/card/attach_card', [BeneficiaryController::class, 'attach']);
    Route::get('/card/agent_details/{id}', [AgentAuthController::class, 'show']);
    Route::get('/training/get_training/{id}', [TrainingController::class, 'trainings']);
    // cards/agent_details/ 
    // $token = $request->user()->createToken($request->token_name);
 
    // return ['token' => $token->plainTextToken];
});
