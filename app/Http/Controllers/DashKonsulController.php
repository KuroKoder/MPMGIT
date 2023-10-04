<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class DashKonsulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.konsultasi.index', [
            'title' => 'Konsultasi',
            'konsultasis'=>Konsultasi::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beranda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData=$request->validate([
        //     'nama'=>'required|max:255',
        //     'domisili'=>'required|unique:postings',
        //     'tgl'=>'required',
        //     'no_telepon' => 'required',
        //     'keluhan' => 'required',
        //     'lama_keluhan' => 'required',
        // ]);

        // Konsultasi::create($validatedData);
        // return redirect('beranda')->with('success', 'Konsultasi anda terkirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        Konsultasi::destroy($konsultasi->id);
        return redirect('/dashboard/konsultasis')->with('success', 'Consultation Data Has Been Deleted!');
    }
}
