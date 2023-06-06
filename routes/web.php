<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/family',FamilyController::class);
Route::resource('/adress', AdressController::class);

Route::get('/family', [StudentsController::class,'index'])->name('family.index');

// عرض النموذج لإنشاء طالب جديد
Route::get('/students/create', [StudentsController::class, 'create'])->name('family.create');
