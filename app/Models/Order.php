<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'kendaraan_id',
        'divisi_id',
        'tanggal_ambil',
        'tanggal_kembali',
        'supir_id',
        'status',
        'konfirmasi1',
        'konfirmasi2',
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
