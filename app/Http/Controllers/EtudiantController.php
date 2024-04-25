<?php

namespace App\Http\Controllers;

use App\Events\EtudiantCreatedEvent;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste_etudiant(){

        $etudiants = Etudiant::all();

        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant(){

        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request){

        $request->validate([
            'nom'=>'required|min:3|max:50',
            'prenom'=> 'required|min:3|max:50',
            'classe'=> 'required'
        ]);
        $etudiant = Etudiant::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'classe'=>$request->classe
        ]);

        event(new EtudiantCreatedEvent($etudiant));

        // $etudiant = new Etudiant();
        // $etudiant->nom= $request->nom;
        // $etudiant->prenom= $request->prenom;
        // $etudiant->classe=$request->classe;
        // $etudiant->save();

        return redirect('/ajouter')->with('status',"l'etudiant a bien été ajouter avec succés!!!");
    }

    public function update_etudiant($id){

        $etudiants = Etudiant::find($id);

        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){

        $request->validate([
            'nom'=>'required|min:3|max:50',
            'prenom'=> 'required|min:3|max:50',
            'classe'=> 'required'
        ]);

        $etudiant =Etudiant::find($request->id);
        $etudiant->nom= $request->nom;
        $etudiant->prenom= $request->prenom;
        $etudiant->classe=$request->classe;
        $etudiant->update();

        return redirect('/etudiant')->with('status',"l'etudiant a bien été mis en jours avec succés!!!");
    }

    public function delete_etudiant($id){

        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant')->with('status',"l'etudiant a bien été supprimer avec succés!!!");
    }

    public function historique(){
        $etudiants = Etudiant::onlyTrashed()
                // ->where('id', $id)
                ->get();
        // dd($etudiants);
        return view('etudiant.historique', compact('etudiants'));
    }

    public function restore($id){
        $etudiants= Etudiant::onlyTrashed()
        ->where('id', $id)
        ->restore();

        return redirect('/historique')->with('status', "restoration avec success");
    }

    public function formatage($id) {
        $etudiants= Etudiant::onlyTrashed()
        ->where('id', $id)
        ->forceDelete();

        return redirect('/historique')->with('status', "supression avec success");
    }
}
