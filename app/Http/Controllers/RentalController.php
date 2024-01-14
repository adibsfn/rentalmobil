<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use App\Models\Rental;
use App\Models\Mobil;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::where('id_user', auth()->user()->id)->get();
        
        return view('rentals.index', [
            'title' => 'Rental Mobil',
            'judul' => 'Riwayat Rental',
            'rentals' => $rentals,
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
        return view('rentals.create', [
            'title' => 'Rental Mobil',
            'judul' => 'Isi data penyewaan mobil',
            'rentals' => Rental::all(),
            'mobils'  => Mobil::where('status', 'tersedia')->get(),
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
            'id_mobil' => 'required',
            'tanggal_rental' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        // Tambahkan 'idUser' ke dalam $validatedData
        $validatedData['id_user'] = auth()->user()->id;

        Rental::create($validatedData);
        $mobilId = $request->id_mobil;
        Mobil::where('id', $mobilId)->update(['status' => 'tidak tersedia']);

        return redirect('/rentals')->with('success', 'Mobil berhasil disewa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        // dd($rental);
        return view('rentals.kembali', [
            'title' => 'Rental Mobil',
            'judul' => 'Kembalikan Mobil',
            'rentals' => $rental,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        // dd($request);

        $validatedData = $request->validate([
            'id_mobil' => 'required',
            'plat_mobil' => 'required',
            'tanggal_rental' => 'required',
            'tanggal_kembali' => 'required',
            'total_hari' => 'required',
            'total_harga' => 'required',
        ]);
        $validatedData['id_user'] = auth()->user()->id;

        Kembali::create($validatedData);
        $mobilId = $request->id_mobil;
        Mobil::where('id', $mobilId)->update(['status' => 'tersedia']);
        Rental::destroy('id', $rental->id);

        return redirect('/rentals')->with('success', 'Mobil berhasil dikembalikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
