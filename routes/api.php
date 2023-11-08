<?php

use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Principal', [TagController::class,'GetPrincipal']);
Route::get('/Tags', [TagController::class,'index'])->name('tag.index');
Route::get('/Tags/create', [TagController::class,'create']);
Route::post('/Tags/Guardar', [TagController::class,'store']);
