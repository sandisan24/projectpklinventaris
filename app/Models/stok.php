<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'kategori_barang', 'stokasal', 'merek', 'jumblahbarangmasuk', 'jumblahbarangkeluar', 'jumblahbarang', 'peminjaman'];
    protected $visible = ['nama_barang', 'kategori_barang', 'stokasal', 'merek', 'jumblahbarangmasuk', 'jumblahbarangkeluar', 'jumblahbarang', 'peminjaman'];
    public $timestamps = true;
    public function barang_masuk()
    {
        return $this->belongsTo('App\Models\barangmasuk', 'id_barang');
    }
    public function barang_keluar()
    {
        return $this->belongsTo('App\Models\barangkeluar', 'id_barang');
    }
    public function peminjaman()
    {
        return $this->belongsTo('App\Models\peminjaman', 'id_barang');
    }
}
