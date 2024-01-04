<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainCommandeController extends Controller
{
    //

    public function MainCommande () {
        return view ('Commande.Main');
    }
}
