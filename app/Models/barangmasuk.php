<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang', 'nama_barang', 'kategori_barang', 'merek', 'jumlah_barang', 'tgl_masuk', 'kondisi', 'keterangan'];
    protected $visible = ['id_barang', 'nama_barang', 'kategori_barang', 'merek', 'jumlah_barang', 'tgl_masuk', 'kondisi', 'keterangan'];
    public $timestamps = true;

    public function stok()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }
}
