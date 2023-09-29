<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmailnotificationController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SouscriptionController;
use App\Models\souscription;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('client', ClientController::class);
Route::resource('service', ServiceController::class);
Route::resource('souscription', SouscriptionController::class);
Route::resource('mail', EmailnotificationController::class);
Route::resource('facture', FactureController::class);
Route::resource('entreprise', EntrepriseController::class);