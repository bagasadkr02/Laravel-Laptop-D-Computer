<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.toko.index', [
            'tokos' => Toko::get(),
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.toko.create');
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
        $validateData = $request->validate([
            'nama_toko' => 'required|max:255',
            'description' => 'required|max:255',
            'notes' => 'required|max:255',
            'address' => 'required|max:255',
            'phone_number' => 'required|max:13'
        ]);
        $validateData['id'] = auth()->user()->id;

        Toko::create($validateData);

        return redirect('/dashboard/toko')->with([
            "status" => "success",
            "message" => "Success"
        ]);

        return redirect('/dashboard/toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        //
        $data = Toko::find($toko->id);
        return view('dashboard.toko.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko)
    {
        //
        $validateData = $request->validate([
            'nama_toko' => 'required|max:255',
            'description' => 'required|max:255',
            'notes' => 'required|max:255',
            'address' => 'required|max:255',
            'phone_number' => 'required|max:13'
        ]);
        $validateData['id'] = $toko->id;

        Toko::where('id', $toko->id)
        ->update($validateData);

        return redirect('/dashboard/toko');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        //
        Toko::destroy($toko->id);

        return redirect('/dashboard/toko');
    }
}
