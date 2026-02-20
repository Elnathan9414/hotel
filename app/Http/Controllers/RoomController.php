<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('hotel')
            ->orderBy('number')
            ->get();

        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $hotels = Hotel::orderBy('name')->get();
        return view('rooms.create', compact('hotels'));
    }

    public function store(StoreRoomRequest $request)
    {
        Room::create($request->validated());

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Chambre ajoutée avec succès');
    }

    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        $hotels = Hotel::orderBy('name')->get();
        return view('rooms.edit', compact('room', 'hotels'));
    }

    public function update(UpdateRoomRequest $request, Room $room)
    {
        $room->update($request->validated());

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Chambre mise à jour avec succès');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Chambre supprimée avec succès');
    }
}