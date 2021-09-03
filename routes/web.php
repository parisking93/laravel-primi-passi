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

Route::get('/', function () {
    $data = [
        'salutare' => 'Saluta',
        'aboutUs' => 'Chi Siamo',
        'info' => 'Contatti'
    ];
    return view('welcome', $data);
})->name('welcome');

Route::get('/helloWorld', function () {
    return view('helloWorld');
})->name('helloWorld');

Route::get('/chi-siamo', function () {
    $data = [
        'info' => [
            'name' => 'emmanuel',
            'surname' => 'parisi',
            'email' => 'nonladico@gmail.com',
            'number' => 3911557898
            ]
        ];
    return view('about', $data);
})->name('about');
