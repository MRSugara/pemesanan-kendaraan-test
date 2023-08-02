<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';
    protected $fillable = [
        'name',
        'plat',
        'bbm',
        'service',
        'riwayat',
        'status',
    ];
    public function order()
    {
        return $this->belongTo(Order::class);
    }
}