<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\OrdersApiController;
use App\Http\Controllers\Api\V1\InvoiceApiController;

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

Route::prefix('v1')->as('api.')->middleware(['check.token'])->group(function () {
    // Orders
    Route::apiResource('orders', OrdersApiController::class);

    // Invoices
    Route::apiResource('invoices', InvoiceApiController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
