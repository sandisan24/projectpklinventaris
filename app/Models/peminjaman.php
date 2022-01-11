<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $fillable = ['peminjaman', 'jk', 'no_tlp', 'jumlah', 'merek', 'id_barang', 'tgl_pinjam', 'tgl_kembali'];
    protected $visible = ['peminjaman', 'jk', 'no_tlp', 'jumlah', 'merek', 'id_barang', 'tgl_pinjam', 'tgl_kembali'];
    public $timestamps = true;

    public function stok()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Stok', 'id_barang');
    }
}
