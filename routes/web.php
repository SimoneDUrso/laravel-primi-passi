<?php

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

// Route per l'homepage
Route::get('/', function () {
    $message = 'Hello World!!!';
    return view('home', compact('message'));
})->name('home');

// Route per la sezione 'about us'
Route::get('/aboutus', function () {
    $message = 'This is us!';
    return view('aboutus', compact('message'));
})->name('aboutus');

// Route per la sezione 'contacts'
Route::get('/contacts', function () {
    $message = 'These are our contacts!';
    return view('contacts', compact('message'));
})->name('contacts');
