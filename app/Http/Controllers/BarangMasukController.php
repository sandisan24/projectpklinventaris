<?php

namespace App\Http\Controllers;

use App\Models\barangmasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangmasuk = barangmasuk::all();
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
        return view('barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
        ]);

        $barangmasuk = new Barangmasuk;
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->nama_barang = $request->nama_barang;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->merek = $request->merek;
        $barangmasuk->jumlah_barang = $request->jumlah_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
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
        $barangmasuk = barangmasuk::findOrFail($id);
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
        $barangmasuk = barangmasuk::findOrFail($id);
        return view('barangmasuk.edit', compact('barangmasuk'));
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
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'merek' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
        ]);

        $barangmasuk = barangmasuk::findOrFail($id);
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->jumlah_barang = $request->jumlah_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->kategori_barang = $request->kategori_barang;
        $barangmasuk->kondisi = $request->kondisi;
        $barangmasuk->keterangan = $request->keterangan;
        $barangmasuk->save();
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
        $barangmasuk = barangmasuk::findOrFail($id);
        $barangmasuk->delete();
        return redirect()->route('barangmasuk.index');
    }
}
