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
        'description' => 'Cosa facciamo'
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

Route::get('/description', function () {
    $data = ['description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odit esse ipsa quod quaerat excepturi nulla sit rem pariatur est porro libero optio eius, atque dignissimos recusandae error molestias similique culpa. Non velit fugiat consequuntur optio, sint at vero dolor, ad est expedita nostrum tempora labore corrupti error pariatur doloremque.'];
    return view('description', $data);
})->name('description');
