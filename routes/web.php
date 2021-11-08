<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GroupController,ClassificationController, SubClassificationController,MedicineController, ResumeController};

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


Route::get('/admin', function () {
    return view('admin.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/group',GroupController::class);
Route::resource('admin/classification',ClassificationController::class);
Route::resource('admin/subclassification',SubClassificationController::class);
Route::resource('admin/medicine',MedicineController::class);
Route::resource('admin/resume',ResumeController::class);
