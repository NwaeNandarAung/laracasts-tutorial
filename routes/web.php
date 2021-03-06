<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityLinksController;
use App\Http\Controllers\VotesController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/community', [CommunityLinksController::class, 'index']);
Route::post('/community', [CommunityLinksController::class, 'store']);
Route::get('/community/{channel}', [CommunityLinksController::class, 'index']);

Route::post('/votes/{link}', [VotesController::class, 'store']);
