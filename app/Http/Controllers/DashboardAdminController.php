<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use GrahamCampbell\ResultType\Result;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session(['resiNotFound' => '']);
        if (request('search')) {

            $laptops = Admin::where('resi', 'like', '%' . request('search') . '%')->latest()->get();

            if (count($laptops) != 0) {
                return view('dashboard.laptop.index', [
                    'laptops' => $laptops,
                ]);
            } else {
                session(['resiNotFound' => 'Resi tidak ditemukan!']);
                return view('dashboard.laptop.index', [
                    'laptops' => $laptops,
                ]);
            }
        } else {
            return view('dashboard.laptop.index', [
                'laptops' => Admin::get(),
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_laptop' => 'required|max:255',
            'kerusakan' => 'required|max:255',
            'resi' => 'required|max:12',
            'pemilik_laptop' => 'required|max:255',
            'estimasi' => 'required|max:255'
        ]);
        $validateData['id'] = auth()->user()->id;

        Admin::create($validateData);

        return redirect('/dashboard/laptop');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $laptop)
    {
        // dd($laptop->id);
        // return view('dashboard.laptop.edit', [
        //     'id' => $laptop,
        // ]);
        $data = Admin::find($laptop->id);
        return view('dashboard.laptop.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $laptop)
    {
        $validateData = $request->validate([
            'nama_laptop' => 'required|max:255',
            'kerusakan' => 'required|max:255',
            'resi' => 'required|max:12',
            'pemilik_laptop' => 'required|max:255',
            'estimasi' => 'required|max:255'
        ]);

        Admin::where('id', $laptop->id)
            ->update($validateData);

        return redirect('/dashboard/laptop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $laptop)
    {
        Admin::destroy($laptop->id);

        return redirect('/dashboard/laptop');
    }
}
