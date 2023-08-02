<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supirs';
    protected $fillable = [
        'name',
        'status',
    ];
    public function order()
    {
        return $this->belongTo(Order::class);
    }
}