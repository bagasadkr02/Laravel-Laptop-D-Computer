<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use Illuminate\Support\Facades\DB;
use Response;

class HomeController extends Controller
{
    public function index()
    {
        $tokos = Toko::latest();
        if (request('searchKota')) {
            $tokos->where('address', 'like', '%' . request('searchKota') . '%');
            // $laptops->orWhere('resi', 'like', '%' . request('searchResi') . '%');

            return view('data', [
                'tokos' => $tokos->paginate(3,['*'],'pag'),

            ]);
        } else {
            return view('welcome', [
                'title' => 'Home',

            ]);
        }
    }

    public function show()
    {
    }

    public function searchResi()
    {
        dd(request('searchResi'));
        // $laptops = Admin::get();
        // $keyword = $request->searchResi;
        // $laptops->where('nama_laptop', 'like', '%' . $request . '%');
        // return Response::json($laptops);

        // return ('hello');
    }
}
