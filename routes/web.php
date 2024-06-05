<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\NoRuleController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YesRuleController;

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
    return view('home');
})->middleware('auth');

Route::get('/index', function () {
    return view('layouts.index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/diseases', [DiseaseController::class, 'index'])->middleware(['auth', 'doctorAdmin']);
// Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/disease-add', [DiseaseController::class, 'create'])->middleware(['auth', 'doctorAdmin']);
Route::post('/disease', [DiseaseController::class, 'store'])->middleware(['auth', 'doctorAdmin']);
Route::get('/disease-edit/{id}', [DiseaseController::class, 'edit'])->middleware(['auth', 'doctorAdmin']);
Route::put('/disease/{id}', [DiseaseController::class, 'update'])->middleware(['auth', 'doctorAdmin']);
Route::get('/disease-delete/{id}', [DiseaseController::class, 'delete'])->middleware(['auth', 'doctorAdmin']);
Route::delete('/disease-destroy/{id}', [DiseaseController::class, 'destroy'])->middleware(['auth', 'doctorAdmin']);

Route::get('/consul/{first_id}/{no}', [YesRuleController::class, 'index'])->middleware(['auth', 'onlyPasien']);
Route::post('/consul', [YesRuleController::class, 'consul'])->middleware(['auth', 'onlyPasien']);
Route::get('/hasil/{third_id}/{no}', [YesRuleController::class, 'hasil'])->middleware(['auth', 'onlyPasien']);

Route::post('/consul1', [NoRuleController::class, 'consul'])->middleware(['auth', 'onlyPasien']);
Route::get('/hasil1/{first_id}', [NoRuleController::class, 'hasil'])->middleware(['auth', 'onlyPasien']);


Route::get('/symptoms', [SymptomController::class, 'index'])->middleware(['auth', 'doctorAdmin']);
// Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/symptom-add', [SymptomController::class, 'create'])->middleware(['auth', 'doctorAdmin']);
Route::post('/symptom', [SymptomController::class, 'store'])->middleware(['auth', 'doctorAdmin']);
Route::get('/symptom-edit/{id}', [SymptomController::class, 'edit'])->middleware(['auth', 'doctorAdmin']);
Route::put('/symptom/{id}', [SymptomController::class, 'update'])->middleware(['auth', 'doctorAdmin']);
Route::get('/symptom-delete/{id}', [SymptomController::class, 'delete'])->middleware(['auth', 'doctorAdmin']);
Route::delete('/symptom-destroy/{id}', [SymptomController::class, 'destroy'])->middleware(['auth', 'doctorAdmin']);

Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'onlyDoctor']);

Route::get('/pasiens', [HasilController::class, 'index'])->middleware(['auth', 'doctorAdmin']);
