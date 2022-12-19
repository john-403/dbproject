<?php

namespace App\Http\Controllers;

use App\Models\Dock;
use Illuminate\Http\Request;

class DockController extends Controller
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
        $docks = Dock::all();
        // dd($clients);
        return view('dock.index', [
            'docks' => $docks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dock::create([
            'name' => $request->name,
            'size' => $request->size,
            'depth' => $request->depth

        ]);
        return redirect(route('docks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function show(Dock $dock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function edit(Dock $dock)
    {
        return view('dock.edit')->with('dock', $dock);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dock $dock)
    {
        Dock::where('id', $dock->id)->update([
            'name' => $request->name,
            'size' => $request->size,
            'depth' => $request->depth
        ]);

        return redirect(route('docks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dock $dock)
    {
        Dock::destroy($dock->id);

        return redirect(route('docks.index'))->with('message', 'Dock has been deleted.');
    }
}
