<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('1', function () {
    return 'Je suis la page 1 !';
});

Route::get('2', function () {
    return 'Je suis la page 2 !';
});

Route::get('3', function () {
    return 'Je suis la page 3 !';
});

// On peut utiliser un paramètre pour une route qui accepte des éléments variables en utilisant des accolades

/* ce code accepte tous les parametres
Route::get('{n}', function ($n) {
    return 'Je suis la page ' .$n. ' !';
});
*/
// parametre avec expression régulière
Route::get('{n}', function ($n) {
    return 'Je suis la page ' .$n. ' !';
})->where('n', '[1-3]');

// Route nommée
Route::get('7', function () {
    return "Je suis la page d'accueil";
})->name('7');

// Les vues
Route::get('/', function () {
    return view('vue1');
});

// Les vues paramétrées
// Route::get('article/{n}', function ($n) {
//     return view('article')->with('numero', $n);
// })-> where('n', '[1-9]+');

// Transmettre un tableau comme paramètre
Route::get('article/{n}', function ($n) {
    return view('article', ['numero' => $n]);
})->where('n', '[1-9]+');

Route::get('facture/{n}', function ($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');