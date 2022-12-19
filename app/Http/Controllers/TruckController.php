<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
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
        $trucks = Truck::all();
        // dd($clients);
        return view('truck.index', [
            'trucks' => $trucks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('truck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Truck::create([
            'brand' => $request->brand,
            'capacity' => $request->capacity,
            'maxLoad' => $request->maxLoad,
            'height' => $request->height

        ]);
        return redirect(route('trucks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(Truck $truck)
    {
        return view('truck.edit')->with('truck', $truck);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Truck $truck)
    {
        Truck::where('id', $truck->id)->update([
            'brand' => $request->brand,
            'capacity' => $request->capacity,
            'maxLoad' => $request->maxLoad,
            'height' => $request->height
        ]);

        return redirect(route('trucks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        Truck::destroy($truck->id);

        return redirect(route('trucks.index'))->with('message', 'Truck has been deleted.');
    }
}
