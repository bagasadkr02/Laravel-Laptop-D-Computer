<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (request('search')) {

            $users = User::where('username', 'like', '%' . request('search') . '%')->latest()->get();

            if (count($users) != 0) {
                return view('dashboard.user.index', [
                    'users' => $users,
                ]);
            } else {
                session(['resiNotFound' => 'Resi tidak ditemukan!']);
                return view('dashboard.user.index', [
                    'users' => $users,
                ]);
            }
        } else {
            return view('dashboard.user.index', [
                'users' => User::get(),
            ]);
        }
        return view('dashboard.user.index', [
            'users' => User::get(),
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
        return view('dashboard.user.create');
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
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users|max:255',
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:5|max:255',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/dashboard/user')->with([
            "status" => "success",
            "message" => "Success"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $data = User::find($user->id);
        return view('dashboard.user.profile', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $data = User::find($user->id);
        return view('dashboard.user.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username,'.$user->id,
            'email' => 'required|email:dns|max:255',
            'is_admin' => 'max:1',
        ]);

        $query = User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);

        return redirect('/dashboard/user');
    }
    
    public function changePassword($id)
    {
        return view('dashboard.user.change-pass')->with("id", $id);
    }

    public function changePasswordHandler(Request $request, $id)
    {
        $validateData = $request->validate([
            'password' => 'min:5|max:255',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::where('id', $id)
        ->update($validateData);

        return redirect('/dashboard/user');

    }
}
