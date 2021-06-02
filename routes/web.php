<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgentsController;

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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("/create", [AgentsController::class, 'create'])->name('agent.dashboard');
    //Route::get("/create/{id}", [AgentsController::class, 'create'])->name('agent.dashboard');
    Route::post("/post-agent", [AgentsController::class, 'saveAgent'])->name('agent.post');
    Route::patch("/update-agent/{id}", [AgentsController::class, 'updateAgent'])->name('agent.update');
});

//Admin
Route::middleware(['is_admin'])->group(function () {
    Route::patch('admin/approve/{id}', [AgentsController::class, 'approve'])->name('approve');
    Route::patch('admin/disapprove/{id}', [AgentsController::class, 'disapprove'])->name('disapprove');

    Route::patch('admin/suspend/{id}', [AgentsController::class, 'suspend'])->name('suspend');
    Route::patch('admin/unsuspend/{id}', [AgentsController::class, 'unsuspend'])->name('unsuspend');

    Route::get("/agents", [AgentsController::class, 'index'])->name('allAgents');
});