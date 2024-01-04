<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RestaurantsController extends Controller
{
    //
    public function menu () {
        return view ('restaurant.menues.menu');
    }
    public function menuf () {
        return view ('restaurant.menues.menuf');
    }
    public function index () {
        return view ('restaurant.index');
    }   

}
