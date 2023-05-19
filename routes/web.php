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
        'title' => "Benvenuto ",
        'username' => "Christian Totaro",
        'description' => "Questo è un esempio di una pagina di benvenuto",
        'featuresTitle' => "Un qualunque utente in questo sito potrà svolgere queste azioni:",
        'featuresList' => [
            "Spostarsi nella pagina dei contatti",
            "Tornare alla pagina principale",
            "Visualizzare la versione migliore del sito in base alle dimensioni della pagina"
        ]
    ];
    return view('home', $data);
})->name("homepage");

Route::get('/contacts', function () {
    $data = [
        'title' => "Contatti",
        'description' => "Questo è la pagina dei contatti",
        'contactsTitle' => "Lista dei contatti:",
        'contactsList' => [
            "Giampapa Filippo",
            "De Palma Vito",
            "Verrone Filippo"
        ]
    ];
    return view('contacts', $data);
})->name("contatti");
