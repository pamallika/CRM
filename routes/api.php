<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\PipelineController;
use App\Http\Controllers\Api\StageController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'accounts' => AccountController::class,
]);
Route::apiResources([
    'users' => UserController::class,
]);
Route::apiResources([
    'companies' => CompanyController::class,
]);
Route::apiResources([
    'contacts' => ContactController::class,
]);
Route::apiResources([
    'leads' => LeadController::class,
]);
Route::apiResources([
    'pipelines' => PipelineController::class,
]);
Route::apiResources([
    'stages' => StageController::class,
]);

