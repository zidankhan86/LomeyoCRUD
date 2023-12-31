<?php

use App\Http\Controllers\StudentController;
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

Route::get('/app', function () {
    return view('welcome');
});
//Pages
Route::get('/form',[StudentController::class,'studentForm']);
Route::get('/',[StudentController::class,'studentList']);
//Post
Route::post('/student-form-create',[StudentController::class,'studentCreate']);
//Edit
Route::get('/student-edit/{id}',[StudentController::class,'studentEdit']);
Route::post('/student-edit-create/{id}',[StudentController::class,'studentEditCreate']);
//Delete
Route::get('/student-delete/{id}',[StudentController::class,'studentDelete']);
