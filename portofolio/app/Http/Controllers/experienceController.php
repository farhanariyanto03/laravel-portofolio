<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = riwayat::where('tipe', 'experience')->orderBy('tgl_akhir', 'DESC')->get();
        return view('dashboard.experince.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.experince.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->judul);
        Session::flash('tgl_mulai', $request->judul);
        Session::flash('tgl_akhir', $request->judul);
        Session::flash('isi', $request->judul);
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
                'isi' => 'required',
            ],[
                'judul.required' => 'judul wajib diisi',
                'info1.required' => 'judul wajib diisi',
                'tgl_mulai.required' => 'judul wajib diisi',
                'isi.required' => 'isian wajib diisi',
            ]
        );

        $data = [
            'judul' =>$request->judul,
            'info1' =>$request->info1,
            'tipe' => 'experience',
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'isi' =>$request->isi,
        ];
        riwayat::create($data);

        return redirect()->route('experience.index')->with('success', 'Berhasil menambahkan data');
        
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
