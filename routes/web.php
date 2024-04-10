<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']); //suppression
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']); //affiche la page de modification
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']); //modification à la bdd

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']); //affichage liste
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']); //affiche la page d'ajout à la bdd
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']); //ajout à la bdd
