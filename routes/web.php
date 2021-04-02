<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampeignController;

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



Route::get('/campeign', [CampeignController::class, 'index'])->name('campeign');
Route::get('/addcampeign', [CampeignController::class, 'addcampeign'])->name('addcampeign');
Route::post('/campeign', [CampeignController::class, 'store']);



Route::post('/viewcampeign/{id}/', [CampeignController::class, 'viewcampeign'])->name('viewcampeign');
Route::post('/paynow', [CampeignController::class, 'pay'])->name('paynow');














require __DIR__.'/auth.php';
