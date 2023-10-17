<?php

namespace App\Http\Controllers;

use App\Models\Chambres;
use App\Http\Requests\StoreChambresRequest;
use App\Http\Requests\UpdateChambresRequest;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class ChamnreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambre = DB::table('chambres')->orderBy('id')->simplePaginate(10);
        // $client = client::all();
          return view('chambre.index', compact('chambre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chambre= Chambres::all();
        return view('chambre.create', compact('chambre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChambresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChambresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function show(Chambres $chambres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambres $chambres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChambresRequest  $request
     * @param  \App\Models\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChambresRequest $request, Chambres $chambres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambres $chambres)
    {
        //
    }
}
