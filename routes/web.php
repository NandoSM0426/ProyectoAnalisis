<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('tag/principal');
});
Route::get('/principal', function () {
    return view('tag/principal');
})->name('principal');*/

Route::delete('tag/{tag}', 'TagController@destroy')->name('tag.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



