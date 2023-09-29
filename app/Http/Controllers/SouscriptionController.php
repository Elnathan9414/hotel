<?php

namespace App\Http\Controllers;

use App\Models\souscription;
use App\Models\service;
use App\Models\client;
use App\Http\Requests\StoresouscriptionRequest;
use App\Http\Requests\UpdatesouscriptionRequest;

class SouscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souscription = souscription::all();
        return view('souscription.index', compact('souscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $souscription = souscription::all();
        return view('souscription.create', compact('souscription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresouscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresouscriptionRequest $request)
    {
        $souscription= new souscription();
        $souscription->serviceSouscrit=$request->input('serviceSouscrit');
        $souscription->clientsouscrit=$request->input('clientsouscrit');
        $souscription->datedebut=$request->input('datedebut');
        $souscription->datefin=$request->input('datefin');
        $souscription->save();
        return redirect()->route('souscription.index')->with('info', 'La declaration de decès  a bien été crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function show(souscription $souscription)
    {
       // $souscription = souscription::all();
        return view('souscription.show', compact('souscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function edit(souscription $souscription)
    {
        return view('souscription.edit', compact('souscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesouscriptionRequest  $request
     * @param  \App\Models\souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesouscriptionRequest $request, souscription $souscription)
    {
        $souscription->update($request->all());
        return redirect()->route('souscription.index')->with('info', 'La déclaration a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(souscription $souscription)
    {
        $souscription->delete();
        return back()->with('info', ' supprimé dans la base de données.');
    }
}
