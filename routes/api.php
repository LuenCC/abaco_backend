<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoanRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('status', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API Working'
    ]);
});

Route::resource('loan-request', LoanRequestController::class)->only([
    'index', 'store'
]);;
