<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mobils.index', [
            'title' => 'Rental Mobil',
            'judul' => 'Data Mobil',
            'mobils' => Mobil::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobils.create', [
            'title' => 'Rental Mobil',
            'judul' => 'Data Mobil',
            'mobils' => Mobil::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'plat_no' => 'required|unique:mobils',
            'tarif' => 'required', 
            'status' => 'required' 
        ]);

        Mobil::create($validatedData);
        return redirect('/mobils')->with('success', 'Mobil berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', [
            'title' => 'Rental Mobil',
            'judul' => 'Edit data mobil',
            'mobil' => $mobil
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'plat_no' => 'required',
            'tarif' => 'required', 
            'status' => 'required' 
        ]);

        Mobil::where('id', $mobil->id)->update($validatedData);
        return redirect('/mobils')->with('success', 'Data mobil berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        Mobil::destroy('id', $mobil->id);
        return redirect('/mobils')->with('success', 'Mobil berhasil dihapus');
    }

    public function getTarif($id)
    {
        $mobil = Mobil::find($id);

        if ($mobil) {
            return response()->json(['tarif' => $mobil->tarif]);
        } else {
            return response()->json(['error' => 'Mobil tidak ditemukan'], 404);
        }
    }
}
