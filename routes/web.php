<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/connexion', function () {
    return view('auth.login');
})->name('loginpage');

Route::post('/login', 'AdministrateurController@login')->name('login');

Route::get('/administrations', 'ServiceController@list')->name('home.administrations');

Route::get('/a-propos', function () {
    return view('homepages.about');
})->name('home.about');

Route::get('/deposer-mon-dossier', function () {
    return view('homepages.formulaire');
})->name('home.formulaire');

Route::post('/service-depot', 'DossierController@chooseService')->name('choose.service');

Route::post('/depot-dossier', 'DossierController@store')->name('dossier.store');

Route::get('/administration/', 'AdministrateurController@index')->name('administration.index');

Route::get('/depots', 'DossierController@list')->name('administration.depots');

Route::post('/valider-depot', 'DossierController@validerDepot')->name('depot.valider');

Route::get('/dossiers-prets-pour-traitement', 'DossierController@traitlist')->name('administration.traitements');

Route::post('/lancer-dossier-pour-traitement', 'DossierController@lancerTraitement')->name('lancer.traitement');

Route::get('/traiter-les-dossiers', 'DossierController@list_trait')->name('administration.traitement');

Route::post('/traitement-des-dossiers', 'DossierController@traiter')->name('dossier.traiter');

Route::get('/retrait-de-dossier', 'DossierController@retraitlist')->name('administration.retrait');

Route::post('/retirer-dossier', 'DossierController@retrait')->name('dossier.retirer');

Route::get('/ajout-d-un-membre-de-l-administration', function () {
    return view('admin.ajoutmembre');
})->name('administration.ajout');

Route::get('/suivi-de-mon-dossier', 'DossierController@suivre')->name('suivi');

Route::post('/suivre', 'DossierController@recherche')->name('dossier.suivre');

Route::get('/liste-des-administrations', 'ServiceController@lister')->name('services');

Route::get('/ajouter-service', function () {
    return view('superadmin.createservice');
})->name('services.add');

Route::post('/ajout-service', 'ServiceController@store')->name('service.store');

Route::get('/ajouter-administrateur', 'AdministrateurController@create')->name('admin.add');

Route::post('/ajout-admin', 'AdministrateurController@store')->name('admin.store');

Route::get('/partie-administration', function () {
    return view('superadmin.index');
})->name('superadmin');

Route::get('/qrcode', 'HomeController@qrcode')->name('qrcode');

