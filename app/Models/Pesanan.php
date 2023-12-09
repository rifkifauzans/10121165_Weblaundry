<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['pelanggan_id', 'kategori_paket_id', 'nama', 'jenis_cucian', 'tanggal_pesan', 'jumlah', 'total_harga'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_paket_id');
    }
}
