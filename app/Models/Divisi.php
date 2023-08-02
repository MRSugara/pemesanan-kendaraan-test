<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'divisis';
    protected $fillable = [
        'name',
    ];
    public function order()
    {
        return $this->belongTo(Order::class);
    }
    public function user()
    {
        return $this->belongTo(Order::class);
    }
}