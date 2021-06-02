<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;

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


// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::apiResource("agent", AgentController::class);
// });

//Route::get("data", [dummyAPI::class, 'getData']);
//Route::get('list',[DeviceController::class, 'lists']);
Route::get('list/{id?}',[DeviceController::class, 'list']);
Route::post('create', [DeviceController::class, 'create']);
Route::put('update', [DeviceController::class, 'update']);
Route::delete('delete/{id}', [DeviceController::class, 'delete']);
Route::get('search/{name}', [DeviceController::class, 'search']);

//Agents
Route::get("agent", [AgentController::class,'index']);
Route::get("state/{name}", [AgentController::class, 'state']);

Route::post("login", [UserController::class, 'index']);