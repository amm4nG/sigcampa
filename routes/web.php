<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PetaController;
use App\Models\Artikel;
use App\Models\Faq;
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
    $faqs = Faq::all();
    $artikels = Artikel::all();
    return view('welcome', compact('faqs', 'artikels'));
});

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/dashboard    ', [DashboardController::class, 'index']);
Route::resource('artikel', ArtikelController::class);
Route::resource('pengaturan', PengaturanController::class);
Route::resource('faq', FaqController::class);
Route::resource('peta', PetaController::class);
