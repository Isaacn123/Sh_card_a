<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\CardController;

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
Route::get('/card/get_id', [BeneficiaryController::class, 'fetchid'])->name('fetchid');
Route::post('/card/attach', [BeneficiaryController::class, 'attach'])->name('attach');
Route::patch('/usercard', [CardController::class, 'update'])->name('usercard');
Route::post('/card/scan', [CardController::class, 'scan'])->name('scan');
///Prodcted API AUTH

Route::resource('usercard', BeneficiaryController::class);

Route::group(['middleware' =>['auth:sanctum']], function () {
    // $token = $request->user()->createToken($request->token_name);
 
    // return ['token' => $token->plainTextToken];
});
