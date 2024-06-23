<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2023
 */

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Livewire\MonComposant;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;

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



 Route::get('composant', MonComposant::class);

 // ajout des routes de suppression
 Route::controller(FilmController::class)->group(function(){
  Route::delete('films/force/{id}', 'forceDestroy')->name('films.force.destroy');
  Route::put('films/restore/{id}', 'restore')->name('films.restore');
  Route::get('category/{slug}/films', 'index')->name('films.category');
  Route::get('actor/{slug}/films', 'index')->name('films.actor');
 });
 // Cours Laravel 10 – les données – les ressources (1/2)
  Route::resource('films', FilmController::class);

 //
Route::get('contacts', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');

 Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});

 // Cours Laravel 10 – les bases – la validation
 Route::get('contact', [ContactController::class, 'create']);
 Route::post('contact', [ContactController::class, 'store']);

// Cours Laravel 10 – les bases – configuration, session et gestion de fichiers
Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);

// Creation de route avec le controller
// commentaire de la route ci-dessous pour les besoins d'un test
// Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/', function () {
//   return 'coucou';
// });

Route::get('/', Todos::class);
Route::get('counter', Counter::class);
Route::get('posts', ShowPosts::class);

// Route::get('/', function () {
//   return view('welcome')->with('message', 'Vous y êtes !');
// });


Route::get('article/{n}', [ArticleController::class, 'show'])
	->where('n', '[0-9]{2}'); // For only have article from 0 to 99

// Route::get('1', function () {
//     return 'Je suis la page 1 !';
// });

// Route::get('2', function () {
//     return 'Je suis la page 2 !';
// });

// Route::get('3', function () {
//     return 'Je suis la page 3 !';
// });

// // On peut utiliser un paramètre pour une route qui accepte des éléments variables en utilisant des accolades

// /* ce code accepte tous les parametres
// Route::get('{n}', function ($n) {
//     return 'Je suis la page ' .$n. ' !';
// });
// */
// // parametre avec expression régulière
// Route::get('{n}', function ($n) {
//     return 'Je suis la page ' .$n. ' !';
// })->where('n', '[1-3]');

// // Route nommée
// Route::get('7', function () {
//     return "Je suis la page d'accueil";
// })->name('7');

// // Les vues
// Route::get('/', function () {
//     return view('vue1');
// });

// // Les vues paramétrées
// // Route::get('article/{n}', function ($n) {
// //     return view('article')->with('numero', $n);
// // })-> where('n', '[1-9]+');

// // Transmettre un tableau comme paramètre
// Route::get('article/{n}', function ($n) {
//     return view('article', ['numero' => $n]);
// })->where('n', '[1-9]+');

// Route::get('facture/{n}', function ($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');
