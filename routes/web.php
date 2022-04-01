<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Route::get('/generic', function () {
//     return view('generic');
// })->name('generic');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');

Route::get('/generic', [ApiController::class, 'Api'])->name('Api');
Route::get('/', [ApiController::class, 'index'])->name('index');


