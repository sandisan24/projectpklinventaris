<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangkeluar extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang', 'jumlah', 'tgl_keluar', 'kategori_barang', 'merek', 'kondisi'];
    protected $visible = ['id_barang', 'jumlah', 'tgl_keluar', 'kategori_barang', 'merek', 'kondisi'];
    protected $table = 'barang_keluars';
    public $timestamps = true;
    public function stok()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }
}
