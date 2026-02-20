<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;

class HotelController extends Controller
{
    /**
     * Affiche la liste des hôtels
     */
    public function index()
    {
        $hotels = Hotel::orderBy('name')->get();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Formulaire de création
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Enregistre un nouvel hôtel
     */
    public function store(StoreHotelRequest $request)
    {
        Hotel::create($request->validated());

        return redirect()
            ->route('hotels.index')
            ->with('success', 'Hôtel ajouté avec succès');
    }

    /**
     * Affiche les détails d’un hôtel
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Formulaire d’édition
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Met à jour un hôtel
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $hotel->update($request->validated());

        return redirect()
            ->route('hotels.index')
            ->with('success', 'Hôtel mis à jour avec succès');
    }

    /**
     * Supprime un hôtel
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()
            ->route('hotels.index')
            ->with('success', 'Hôtel supprimé avec succès');
    }
}