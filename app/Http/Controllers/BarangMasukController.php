<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Stok;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangmasuk = Barangmasuk::all();
        return view('barangmasuk.index', compact('barangmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stok = Stok::all();
        return view('barangmasuk.create', compact('stok'));
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
            'id_barang' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
        ]);

        $barangmasuk = new Barangmasuk;
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->jumlah_barang = $request->jumlah_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->Merek = $request->Merek;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
        $stok = Stok::findOrFail($request->id_barang);
        $stok->jumblahstok += $request->jumlah_barang;
        $stok->save();
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        return view('barangmasuk.show', compact('barangmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        $stok = Stok::all();
        return view('barangmasuk.edit', compact('barangmasuk', 'stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $request->validate([
            'id_barang' => 'required',
            'kategori_barang' => 'required',
            'Merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
        ]);

        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->jumlah_barang = $request->jumlah_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
        $stok = Stok::findOrFail($request->id_barang);
        $stok->jumblahstok += $request->jumlah_barang;
        $stok->save();

        return redirect()->route('barangmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->delete();
        return redirect()->route('barangmasuk.index');
    }
}
