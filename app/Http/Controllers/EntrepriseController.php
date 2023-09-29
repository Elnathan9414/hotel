<?php

namespace App\Http\Controllers;

use App\Models\entreprise;
use App\Http\Requests\StoreentrepriseRequest;
use App\Http\Requests\UpdateentrepriseRequest;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise = entreprise::all();
        return view('entreprise.index', compact('entreprise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = entreprise::all();
        return view('entreprise.create', compact('entreprise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreentrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreentrepriseRequest $request)
    {
        $entreprise= new entreprise();
         $entreprise->nomEntreprise=$request->input('nomEntreprise');
         $entreprise->localisationEntreprise=$request->input('localisationEntreprise');
         $entreprise->contactEntreprise=$request->input('contactEntreprise');
         $entreprise->emailEntreprise=$request->input('emailEntreprise');
         $entreprise->save();
         return redirect()->route('entreprise.index')->with('info', 'La declaration de decès  a bien été crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(entreprise $entreprise)
    {
       // $entreprise = entreprise::all();
        return view('entreprise.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(entreprise $entreprise)
    {
        
        return view('entreprise.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateentrepriseRequest  $request
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateentrepriseRequest $request, entreprise $entreprise)
    {
        $entreprise->update($request->all());
        return redirect()->route('entreprise.index')->with('info', 'La déclaration a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprise $entreprise)
    {
        $entreprise->delete();
        return back()->with('info', ' supprimé dans la base de données.');
    }
}
