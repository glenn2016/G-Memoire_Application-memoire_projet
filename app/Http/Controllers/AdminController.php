<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categorie;

class AdminController extends Controller
{
    //
    public function menu () {
        return view ('admin.menues.menu');
    }
    public function menuf () {
        return view ('admin.menues.menuf');
    }
    public function indexs () {
        return view ('admin.index');
    }

    public function inscriptiattvalidate()
    {
        $users = User::where('etat_compte', 2)->orderBy('nom')->get();

        return view('admin.pages.inscriptionattvalidation', compact('users'));
    }

    public function showprofilrestaurant ($id) {

        $user = User::find($id);

        return view ('admin.pages.profilRestaurant',compact('user'));
    }
    
    public function updateEtatCompte(Request $request)
    {
        $userId = $request->input('user_id');
    
        // Recherchez l'utilisateur correspondant à l'ID
        $user = User::find($userId);
    
        // Mettez à jour l'état du compte utilisateur à 3
        $user->etat_compte = 1;
    
        // Enregistrez les modifications
        $user->save();

        return redirect()->back()->with('success', 'Le compte a été validé avec succès.');
    }

    public function ajout_categorie () {

        return view ('admin.pages.ajout_categorie');
    }
    public function ajoutcategorie (Request $request) {

        $validatedData = $request->validate([
            'nom' => 'required|string',
            'photo' => 'required|string',
        ]);
        $categorie = new Categorie();

        $categorie->nom = $request->input('nom');
        $categorie->photo = $request->input('photo');

        $categorie->save();

        return redirect()->back()->with('success', 'Le compte a été validé avec succès.');
    }

    
    
}

