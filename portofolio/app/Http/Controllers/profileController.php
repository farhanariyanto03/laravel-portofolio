<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        Session::flash('judul', $request->judul);
        Session::flash('isi', $request->isi);
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto' => 'required'
        ],[
            'nama.required' => 'nama wajib diisi',
            'JK.required' => 'jenis kelamin wajib diisi',
            'alamat.required' => 'alamat wajib diisi',
            'nohp.required' => 'nomor hp wajib diisi',
            'foto.required' => 'foto wajib diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'foto' => $request->foto,
        ];

        if($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('foto-profile');
        }

        profile::create($data);
        return redirect()->route('profile.index')->with('success', 'Berhasil menambahkan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
