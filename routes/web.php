<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');
Route::post('/language-switch', [PagesController::class, 'languageSwitch'])->name('language.switch');
Route::post('/contact-store', [PagesController::class, 'submitContact'])->name('contact-us.store');
