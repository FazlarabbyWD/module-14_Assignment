<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/questionone",[AssignmentController::class,'one'])->name('question.one');
Route::post("/questiontwo",[AssignmentController::class,'two'])->name('question.two');
Route::get("/questionthree/{page}",[AssignmentController::class,'three'])->name('question.three');
Route::get("/questionfour",[AssignmentController::class,'four'])->name('question.four');
Route::post("/questionfive",[AssignmentController::class,'five'])->name('question.five');
Route::post("/questionsix",[AssignmentController::class,'six'])->name('question.six');


Route::get("/submit",[AssignmentController::class,'seven'])->name('question.seven');



