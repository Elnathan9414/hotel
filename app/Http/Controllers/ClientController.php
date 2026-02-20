<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Affiche la liste des clients
     */
    public function index()
    {
        $clients = Client::orderBy('last_name')->get();
         $stats = [
        'total' => Client::count(),
        'this_month' => Client::whereMonth('created_at', now()->month)->count(),
        'today' =>Client::whereDay('created_at', now()->day)->count(), 
    ];


        return view('clients.index', compact('clients', 'stats'));
    }

    /**
     * Formulaire de création
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Enregistre un nouveau client
     */
    public function store(StoreClientRequest $request)
    {
        $data = $request->validated();

    $data['hotel_id'] = auth()->user()->hotel_id;

    Client::create($data);

    return redirect()
        ->route('client.index')
        ->with('success', 'Client ajouté avec succès');
    }

    /**
     * Affiche un client
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Formulaire d’édition
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Met à jour un client
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->validated());
        

        return redirect()
            ->route('client.index')
            ->with('success', 'Client mis à jour avec succès');
    }

    /**
     * Supprime un client
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()
            ->route('client.index')
            ->with('success', 'Client supprimé avec succès');
    }
}