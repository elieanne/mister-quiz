<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\Questions\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('home', [HomeControler::class, 'index'])->name('home');

Route::get('leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

Route::get('/questions.list', [QuestionController::class, 'index'])->name('questions.list');
Route::post('/questions.list', [QuestionController::class, 'store']);
//Route::get('quiz', [QuizController::class, 'index'])->name('quiz');

Route::get('/questions.results', [QuestionController::class, 'index'])->name('questions.results');
Route::post('/questions.results', [QuestionController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
