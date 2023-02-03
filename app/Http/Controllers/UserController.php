<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        $users = User::paginate(20);
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'username' => Request()->username,
            'password' => Hash::make(Request()->password),
            'role' => 'pegawai'
        ];

        // @dd($data);

        User::create($data);
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users, $id)
    {
        $users = User::find($id);
        return view('dashboard.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users, $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            // 'password' => 'required',
        ]);

        // $data = [
        //     'nama' => Request()->nama,
        //     'username' => Request()->username,
        //     'password' => Hash::make(Request()->password),
        //     'role' => 'pegawai'
        // ];

        // @dd($request);

        $users -> update($request->except('_token'));
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users')->with('pesan', 'Akun Berhasil Di Tambahkan');
    }
}
