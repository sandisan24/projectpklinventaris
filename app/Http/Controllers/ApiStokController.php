<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class ApiStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Stok::where('id', 1)
                ->where('nama_barang', 'Komputer')
                ->get();

        if ($stok->count() >=1) {
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Berhasil',
                'data' => $stok,
            ]);
        }else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Gagal',
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $stok = new Stok();
        $stok->nama_barang = $request->nama_barang;
        $stok->kategori_barang = $request->kategori_barang;
        $stok->merek = $request->merek;
        $stok->jumblahstok = $request->jumblahstok;
        $stok->save();
        return response()->json([
            'success' => true,
            'message' => 'data user berhasil dibuat',
            'data' => $user,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
