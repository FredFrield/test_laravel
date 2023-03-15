<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');
Route::get('/contact/all/{id}/update', [ContactController::class, 'updateOneMessage'])->name('contact-data-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateOneMessageSubmit'])->name('contact-data-update-submit');
Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteOneMessageSubmit'])->name('contact-data-delete');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
//Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
