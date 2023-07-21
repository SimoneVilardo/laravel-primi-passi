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
    $dati =[
        'titolo' => 'HELLO WORLD LARAVEL!',
        'content' => 'Eccoci finalmente arrivati a LARAVEL,preparati ad affrontare un nuovo mondo con conoscenze passate!'
    ];
    return view('home', $dati);
});

Route::get('/bonus', function () {
    $data =[
        'titolo' => 'Titolo : LARAVEL',
        'descrizione' => 'Descrizione: FRAMEWORK',
        'difficolta' => 'Difficoltà: medio,alta',
    ];

    return view('bonus', $data);
});

