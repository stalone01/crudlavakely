<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function() {
    Route::get('/foo',[TestController::class, 'foo']);
    Route::get('/bar',[TestController::class, 'bar']);
});

Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']); //suppression
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']); //affiche la page de modification
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']); //modification à la bdd

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']); //affichage liste
Route::get('/historique', [EtudiantController::class, 'historique']); //affichage liste suprimmé
Route::get('/restore/{id}', [EtudiantController::class, 'restore']); // restorer de la liste
Route::get('/formater/{id}', [EtudiantController::class, 'formatage']); //supprimer definitifement
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']); //affiche la page d'ajout à la bdd
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']); //ajout à la bdd

Route::get('/dashboard', function ()
    {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ()
    {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

require __DIR__.'/auth.php';
