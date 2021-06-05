<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/tasks', [HomeController::class, 'getTasks'])->name('tasks');
Route::get('/create', [HomeController::class, 'createView'])->name('create');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');
Route::get('editView/{id}', [HomeController::class, 'editView'])->name('editView');
Route::post('edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::get('delete/{id}', [HomeController::class, 'delete'])->name('delete');
