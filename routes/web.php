<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GroupController,ClassificationController, SubClassificationController,MedicineController, ResumeController};
use App\Http\Controllers\PageController;
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




Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');


Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\PageController::class, 'inicio'])->name('inicio');
Route::get('guiaatc', [App\Http\Controllers\PageController::class, 'guiaatc'])->name('guiaatc');
Route::get('/group{group} -{name}', [App\Http\Controllers\PageController::class, 'group'])->name('grupo');
Route::get('resume{resume}', [App\Http\Controllers\PageController::class, 'resume'])->name('resume');
Route::get('search', [App\Http\Controllers\PageController::class, 'search'])->name('search');

Route::resource('admin/group', GroupController::class);
Route::resource('admin/classification',ClassificationController::class);
Route::resource('admin/subclassification',SubClassificationController::class);
Route::resource('admin/medicine',MedicineController::class);
Route::resource('admin/resume',ResumeController::class);











