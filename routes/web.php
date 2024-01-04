<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MainCommandeController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {   
    return view('welcome.index');
});

//Commande------
Route::get('Commande.Main', [MainCommandeController::class, 'MainCommande']);

//Admin---------
Route::get('admin.menues.menu', [AdminController::class, 'menu']);
Route::get('admin.menues.menuf', [AdminController::class, 'menuf']);
Route::get('admin.index', [AdminController::class, 'indexs']);
Route::get('inscriptionnovalide', [AdminController::class, 'inscriptiattvalidate']);
Route::get('admin.pages.profilRestaurant/{id}', [AdminController::class, 'showprofilrestaurant']);
Route::post('update_etat_compte', [AdminController::class, 'updateEtatCompte'])->name('update_etat_compte');
Route::get('ajout_categorie', [AdminController::class, 'ajout_categorie']);
Route::post('ajoutcategorie', [AdminController::class, 'ajoutcategorie'])->name('ajoutcategorie');


//Restaurant-------
Route::get('restaurant.menues.menu', [RestaurantsController::class, 'menu']);
Route::get('restaurant.menues.menuf', [RestaurantsController::class, 'menuf']);
Route::get('restaurant.index', [RestaurantsController::class, 'index']);

//Welcomme------
Route::get('welcome.restaurants', [WelcomeController::class, 'index']);
Route::get('welcome.livreur', [WelcomeController::class, 'livreur']);
Route::get('menu.menu', [WelcomeController::class, 'menu']);
Route::get('menu.menuef', [WelcomeController::class, 'menuef']);

//Dashbord------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('welcome.attente', [ProfileController::class, 'attente']);
});

require __DIR__.'/auth.php';
