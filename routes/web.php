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

// Route::get('/', function () {
//     return view('insertRead');
// });

// Route::get('/insertRead', function () {
//     return view('insertRead');
// });



Route::get('/', function () {
    return view('students.index');
});
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/create', [StudentController::class, 'create']);
Route::get('/students/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::get('/students', [StudentController::class, 'index'])->name('students');



