<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Ship;
use Illuminate\Http\Request;

class ContainerController extends Controller
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
        $containers = Container::all();
        // dd($clients);
        return view('container.index', [
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
        $ships = Ship::all();
        return view('container.create', ['ships' => $ships]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // when using a FK eloquent doesn't work
        $container = new Container();

        $container->width = $request->width;

        $container->height = $request->height;
        $container->depth = $request->depth;
        $container->ship_id = $request->ship;
        $container->save();
        // Container::create([
        //     'width' => $request->width,
        //     'height' => $request->height,
        //     'depth' => $request->depth,
        //     'ship_id' => $request->ship
        // ]);
        return redirect(route('containers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function show(Container $container)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function edit(Container $container)
    {
        $ships = Ship::all();
        return view('container.edit')->with('container', $container)->with('ships', $ships);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Container $container)
    {
        Container::where('id', $container->id)->update([
            'width' => $request->width,
            'height' => $request->height,
            'depth' => $request->depth,
            'ship_id' => $request->ship
        ]);

        return redirect(route('containers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        Container::destroy($container->id);

        return redirect(route('containers.index'))->with('message', 'Container has been deleted.');
    }
}
