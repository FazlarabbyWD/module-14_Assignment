<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

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

Route::post("/questionone",[AssignmentController::class,'one'])->name('question.one');
Route::post("/questiontwo",[AssignmentController::class,'two'])->name('question.two');
Route::get("/questionthree/{page}",[AssignmentController::class,'three'])->name('question.three');
Route::get("/questionfour",[AssignmentController::class,'four'])->name('question.four');
Route::post("/questionfive",[AssignmentController::class,'five'])->name('question.five');


Route::get("/submit",[AssignmentController::class,'seven'])->name('question.seven');



