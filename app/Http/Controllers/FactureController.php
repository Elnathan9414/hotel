<?php

namespace App\Http\Controllers;

use App\Models\facture;
use App\Http\Requests\StorefactureRequest;
use App\Http\Requests\UpdatefactureRequest;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facture = facture::all();
        return view('facture.index', compact('facture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facture = facture::all();
        return view('facture.create', compact('facture'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefactureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefactureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(facture $facture)
    {
        $facture = facture::all();
        return view('facture.show', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(facture $facture)
    {
        $facture = facture::all();
        return view('facture.edit', compact('facture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefactureRequest  $request
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefactureRequest $request, facture $facture)
    {
        $facture->type = $request->type;
        $facture->montant = $request->montant;
        $facture->save();
        return redirect()->route('facture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(facture $facture)
    {
        $facture->delete();
        return redirect()->route('facture.index');
    }
}
