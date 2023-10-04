<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Testimoni;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $post = Posting::latest()->paginate(3);
        $testimoni = Testimoni::all();
        return view('Beranda', [
            "post" => $post,
            "title" => "Beranda",
            "testimoni" => $testimoni
        ]);

    }
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama'=>'required|max:255',
            'domisili'=>'required|unique:konsultasis',
            'tgl'=>'required',
            'no_telepon' => 'required',
            'keluhan' => 'required',
            'lama_keluhan' => 'required',
        ]);

        Konsultasi::create($validatedData);
        return redirect('/')->with('success', 'Konsultasi anda terkirim!');
    }
}
