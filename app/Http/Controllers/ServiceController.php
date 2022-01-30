<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ServiceController extends Controller
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
        //
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
            'email' => 'required',
            'telephone' => 'required',
            'type' => 'required',
            'logo' => 'required',
            'ville' => 'required',
            'description' => 'required'
        ]);

        $path = $request->logo->store("services/logo", 'public');

        $img = Image::make('storage/'.$path);

        $randString = Str::random(30);
        $img_name = 'services/logo/'.$randString.'_'.time().'.png';
        $img->save('storage/'.$img_name);
        // dd('Well');
        $service = new Service();

        $service->nom =request('nom');
        $service->email =request('email');
        $service->telephone =request('telephone');
        $service->type =request('type');
        $service->logo = 'storage/'.$img_name;
        $service->ville =request('ville');
        $service->description =request('description');
        // dd($service);
        $service->save();

        return back();
    }

    public function list(){
        $services = Service::All();
        return view('homepages.administrations', compact('services'));
    }

    public function lister(){
        $services = Service::All();
        return view('superadmin.services', compact('services'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
