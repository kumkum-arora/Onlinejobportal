<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminController;
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
Route::get('registration', function () {
    return view('registrationform');
});
Route::get('index', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});


Route::view('registration', 'registrationform');
Route::post('registration-submit', [CandidateController::class, 'registrationform_submit']);

// For Login functions
Route::post('login-submit', [AdminController::class, 'login_submit']);
Route::get('logout', [AdminController::class, 'logout_admin']);

// for list all the candidates and update
Route::get('showjobrequests', [CandidateController::class, 'Display_Job_Candidate']);
Route::get('delete{id}', [CandidateController::class, 'Delete_Candidate']);
Route::get('view-candidate{id}', [CandidateController::class, 'show_Candidate']);
Route::post('update{id}', [CandidateController::class, 'update_status']);
Route::post('search-ticket', [CandidateController::class, 'search_by_Ticket']);
