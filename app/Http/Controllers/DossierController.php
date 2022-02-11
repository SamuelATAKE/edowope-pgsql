<?php

namespace App\Http\Controllers;

use App\Dossier;
use App\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::All();
        return view('homepages.formulaire', compact('services'));
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
            'telephone' => 'required',
            'profession' => 'required',
            'genre' => 'required',
            'type' => 'required',
            'contenu' => 'required',
            'motif' => 'required'
        ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $code = '';
        $char = '';
        $char1 = '';
        $char = request('nom');
        $char1 = request('prenom');
        $code .= $char[0];
        $code .= $char[1];
        $code .= $randomString;
        $code .= date('Y-m-d');
        $code .= $char1[0];
        $code .= $char1[1];
        // dd('Well');

        if ($request->file('document')) {
            $documentPath = $request->file('document');
            $documentName = $documentPath->getClientOriginalName();

            $path = $request->file('document')->storeAs('document', $documentName, 'public');

            // dd($path);
          }

        $dossier = new Dossier();

        $dossier->nom = request('nom');
        $dossier->prenom = request('prenom');
        $dossier->email = request('email');
        $dossier->telephone = request('telephone');
        $dossier->profession = request('profession');
        $dossier->genre = request('genre');
        $dossier->type = request('type');
        $dossier->contenu = request('contenu');
        $dossier->motif = request('motif');
        $dossier->document = $path;
        $dossier->commentaire = request('commentaire');
        $dossier->code_depot = $code;
        $dossier->etat = '';

        if(session('service')){
            $dossier->administration = session('service');
        }else{
            $dossier->administration = request('administration');
        }

        // dd($dossier);
        $dossier->save();

        $message = 'Votre code d\'application du dossier est: '.$code.' Veuillez bien le garder';
        // $message .= $code;

        Alert::success('Dépôt effectué', $message);
        return redirect(route('home'))->with('code', $code);

    }

    public function recherche(){
        request()->validate([
            'codedepot' => 'required'
        ]);
        $dossier = Dossier::where('code_depot', request('codedepot'))->first();

        if($dossier){
            session([
                'codedepot' => request('codedepot'),
                'dossier' => $dossier
            ]);
            return redirect(route('suivi'));
        }else{
            return back();
        }

    }

    public function suivre(){
        $dossier= session('dossier');
        return view('homepages.suivi', compact('dossier'));
    }

    public function chooseService(){
        session([
            'service' => request('service')
        ]);
        // dd('Right');
        return redirect(route('home.formulaire'));
    }

    public function list(){
        $dossiers = Dossier::where('administration', session('user')->administration)->where('etat', '')->get();

        return view('admin.depot', compact('dossiers'));
    }

    public function traitlist(){
        $dossiers = Dossier::where('administration', session('user')->administration)->where('etat', 'traitements')->get();

        return view('admin.traitements', compact('dossiers'));
    }

    public function list_trait(){
        $dossiers = Dossier::where('administration', session('user')->administration)->where('etat', 'traitement')->get();

        return view('admin.traitement', compact('dossiers'));
    }

    public function retraitlist(){
        $dossiers = Dossier::where('administration', session('user')->administration)->where('etat', 'retrait')->get();

        return view('admin.retraits', compact('dossiers'));
    }

    public function validerDepot(){
        $dossier = Dossier::where('id', request('dossier'))->first();
        if($dossier){
            $dossier->etat = 'traitements';
            $dossier->save();
            Alert::success('Succès', 'Le dossier est validé');
            return back();
        }else{
            Alert::warning('Echec', 'Veuillez reéssayer');
            return back();
        }
    }

    public function lancerTraitement(){
        $dossier = Dossier::where('id', request('dossier'))->first();
        if($dossier){
            $dossier->etat = 'traitement';
            $dossier->save();
            Alert::success('Succès', 'Le dossier est prêt pour traitement');
            return back();
        }else{
            Alert::warning('Echec', 'Veuillez reéssayer');
            return back();
        }

    }

    public function traiter(){
        $dossier = Dossier::where('id', request('dossier'))->first();
        if($dossier){
            $dossier->etat = 'retrait';
            $dossier->date_retrait = request('dateretrait');
            $dossier->save();
            Alert::success('Succès', 'Le dossier est traité');
            return back();
        }else{
            Alert::warning('Echec', 'Veuillez reéssayer');
            return back();
        }

    }
    public function retrait(){
        $dossier = Dossier::where('id', request('dossier'))->first();
        if($dossier){
            $dossier->etat = 'retire';
            $dossier->save();
            Alert::success('Succès', 'Le dossier est retiré');
            return back();
        }else{
            Alert::warning('Echec', 'Veuillez reéssayer');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(int $id)
    {
        $dossier = Dossier::find($id);
        if($dossier){
            return view('admin.detail', compact('dossier'));
        }else{
            return back()->with('error', 'Erreur de détection de dossier');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function edit(Dossier $dossier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dossier $dossier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dossier $dossier)
    {
        //
    }
}
