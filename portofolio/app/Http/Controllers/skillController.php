<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index()
    {
        return view('dashboard.skill.index');
    }

    public function update(Request $request)
    {
        if($request->method() == 'POST') {
            $request->validate([
                '_language' => 'required',
                '_workflow' => 'required'
            ],[
                '_language.required' => 'Silahkan masukkan bahasa pemograman yang kamu kuasai',
                '_workflow' => 'Silahkan masukkan workflow yang kamu kuasai',
            ]);

            metadata::updateOrCreate(['meta_key']);
        }
    }
}
