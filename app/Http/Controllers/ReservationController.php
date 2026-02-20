<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hotelId = auth()->user()->hotel_id;

        // $reservations = Reservation::where('hotel_id', $hotelId)
        //     ->with(['room', 'client'])
        //     ->latest()
        //     ->paginate(10);

        // return view('reservations.index', compact('reservations'));
         $hotelId = auth()->user()->hotel_id;

    $todayBookings = Reservation::where('hotel_id', $hotelId)
        ->whereDate('created_at', today())
        ->count();

    $arrivals = Reservation::where('hotel_id', $hotelId)
        ->whereDate('check_in', today())
        ->count();

    $departures = Reservation::where('hotel_id', $hotelId)
        ->whereDate('check_out', today())
        ->count();

    $revenue = Reservation::where('hotel_id', $hotelId)
        ->whereDate('check_in', today())
        ->sum('total_amount');

    $calendarEvents = Reservation::where('hotel_id', $hotelId)
        ->get()
        ->map(function ($res) {
            return [
                'title' => $res->client->name,
                'start' => $res->check_in,
                'end'   => $res->check_out,
                'color' => $this->statusColor($res->status),
            ];
        });

    return view('reservations.index', compact(
        'todayBookings',
        'arrivals',
        'departures',
        'revenue',
        'calendarEvents'
    ));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
