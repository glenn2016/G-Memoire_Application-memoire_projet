<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index () {
        return view ('welcome.restaurants');
    }

    public function livreur () {
        return view ('welcome.livreur');
    }

    public function menu () {
        return view ('menu.menu');
    }

    public function menuef () {
        return view ('menu.menuef');
    }
}
