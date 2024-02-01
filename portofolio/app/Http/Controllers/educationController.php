<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = riwayat::where('tipe', 'education')->orderBy('tgl_akhir', 'DESC')->get();
        return view('dashboard.education.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('info3', $request->info3);
        Session::flash('tgl_mulai', $request->tgl_muali);
        Session::flash('tgl_akhir', $request->tgl_akhir);
        // Session::flash('isi', $request->isi);
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
                // 'isi' => 'required',
            ],[
                'judul.required' => 'judul wajib diisi',
                'info1.required' => 'judul wajib diisi',
                'tgl_mulai.required' => 'judul wajib diisi',
                // 'isi.required' => 'isian wajib diisi',
            ]
        );

        $data = [
            'judul' =>$request->judul,
            'info1' =>$request->info1,
            'info2' =>$request->info2,
            'info3' =>$request->info3,
            'tipe' => 'education',
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            // 'isi' =>$request->isi,
        ];
        riwayat::create($data);

        return redirect()->route('education.index')->with('success', 'Berhasil menambahkan data education');
        
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
        $data = riwayat::where('id', $id)->where('tipe', 'education')->first();
        return view('dashboard.education.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
                'tgl_akhir' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'info1.required' => 'info1 wajib diisi',
                'tgl_mulai.required' => 'tgl_mulai wajib diisi',
                'tgl_akhir.required' => 'tgl_akhir wajib diisi',
            ]
            );

            $data = [
                'judul' =>$request->judul,
                'info1' =>$request->info1,
                'info2' =>$request->info2,
                'info3' =>$request->info3,
                'tgl_mulai' =>$request->tgl_mulai,
                'tgl_akhir' =>$request->tgl_akhir,
            ];
            riwayat::where('id', $id)->update($data);

            return redirect()->route('education.index')->with('success', 'Berhasil edit data education');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayat::where('id', $id)->delete();
        return redirect()->route('education.index')->with('success', 'Berhasil delete data education');
    }
}
