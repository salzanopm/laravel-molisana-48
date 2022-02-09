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
    $pasta_array = config('pasta');
    
    $paste_lunghe = [];
    $paste_corte = [];
    $paste_cortissime = [];

    foreach($pasta_array as $pasta) {
        if($pasta['tipo'] === 'lunga') {
            $paste_lunghe[] = $pasta;
        } elseif ($pasta['tipo'] === 'corta') {
            $paste_corte[] = $pasta;
        } elseif($pasta['tipo'] === 'cortissima') {
            $paste_cortissime[] = $pasta;
        }
    }

    $data = [
        'paste_lunghe' => $paste_lunghe,
        'paste_corte' => $paste_corte,
        'paste_cortissime' => $paste_cortissime
    ];

    return view('home', $data);
});
