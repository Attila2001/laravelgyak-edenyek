<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DishController;
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



Route::middleware('auth')->group(function () {

    Route::get('/new-dish',[DishController::class,"create"]);
    Route::get('/edit-dish/{id}',[DishController::class, "edit"]);
    Route::get('/delete-dish/{id}',[DishController::class, "delete"]);
});

Route::get('/',[DishController::class,"index"]);
Route::post('/store-dish',[DishController::class,"store"]);
Route::put('/update-dish',[DishController::class,"update"]);
Route::get('/logout',[DishController::class,"destroy"]);
