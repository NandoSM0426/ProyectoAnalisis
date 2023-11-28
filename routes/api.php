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
Route::delete('/Tags/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
Route::put('/Tags/{tag}', [TagController::class, 'update'])->name('tag.update');

Route::get('/Principal', [OfficeController::class, 'GetPrincipal']);
Route::get('/Offices', [OfficeController::class, 'index'])->name('office.index');
Route::get('/Offices/create', [OfficeController::class, 'create']);
Route::post('/Offices/Guardar', [OfficeController::class, 'store']);
Route::delete('/Offices/{office}', [OfficeController::class, 'destroy'])->name('office.destroy');
Route::put('/Offices/{office}', [OfficeController::class, 'update'])->name('office.update');