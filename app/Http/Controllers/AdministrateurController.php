<?php

namespace App\Http\Controllers;

use App\Administrateur;
use App\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administration = Service::where('id', session('user')->administration)->first();
        return view('admin.index', compact('administration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::All();
        return view('superadmin.createadmin', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telephone' => 'required',
            'fonction' => 'required',
            'administration' => 'required',
        ]);

        $admin = new Administrateur();
        $admin->nom = request('nom');
        $admin->prenom = request('prenom');
        $admin->email = request('email');
        $admin->password = request('password');
        $admin->telephone = request('telephone');
        $admin->fonction = request('fonction');
        $admin->administration = request('administration');
        // dd($admin);
        $admin->save();

        return back();
    }

    public function login()
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Administrateur::where('email', request('email'))->where('password', request('password'))->first();

        if($user){
            session([
                'user' => $user
            ]);
            if($user->administration == 'admin'){
                Alert::success('Connexion réussie', 'Bienvenu cher superadministrateur');
                return redirect(route('superadmin'));
            }else{
                Alert::success('Connexion réussie', 'Bienvenu cher administrateur');
                return redirect(route('administration.index'));
            }

        }else{
            Alert::warning('Connexion échouée', 'Vérifiez vos identifiants ou contactez l\'administrateur');

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        //
    }
}
