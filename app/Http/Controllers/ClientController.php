<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        $clients = Client::all();
        // dd($clients);
        return view('client.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'address' => $request->address,
            'payment' => $request->payment
        ]);
        return redirect(route('clients.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client->fname;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        Client::where('id', $client->id)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'address' => $request->address,
            'payment' => $request->payment
        ]);

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        Client::destroy($client->id);

        return redirect(route('clients.index'))->with('message', 'Client has been deleted.');
    }
}
