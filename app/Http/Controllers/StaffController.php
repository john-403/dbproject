<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
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
        $staffs = Staff::all();
        // dd($clients);
        return view('staff.index', [
            'staffs' => $staffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Staff::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'position' => $request->position,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'address' => $request->address,
            'salary' => $request->salary
        ]);
        return redirect(route('staffs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit')->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        Staff::where('id', $staff->id)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'position' => $request->position,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'address' => $request->address,
            'salary' => $request->salary
        ]);

        return redirect(route('staffs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        Staff::destroy($staff->id);

        return redirect(route('staffs.index'))->with('message', 'Staff has been deleted.');
    }
}
