<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ships = Ship::all();
        $containers = Container::all();
        // dd($clients);
        return view('ship.index', [
            'ships' => $ships,
            'containers' => $containers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ship::create([
            'country' => $request->country,
            'owner' => $request->owner,
            'size' => $request->size,
            'maxQuantity' => $request->maxQuantity,
            'productType' => $request->productType,
        ]);
        return redirect(route('ships.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function show(Ship $ship)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function edit(Ship $ship)
    {
        return view('ship.edit')->with('ship', $ship);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ship $ship)
    {
        Ship::where('id', $ship->id)->update([
            'country' => $request->country,
            'owner' => $request->owner,
            'size' => $request->size,
            'maxQuantity' => $request->maxQuantity,
            'productType' => $request->productType,
        ]);

        return redirect(route('ships.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ship $ship)
    {
        // Ship::find($ship->id)->containers()->delete();
        Ship::destroy($ship->id);

        return redirect(route('ships.index'))->with('message', 'Ship has been deleted.');
    }
}
