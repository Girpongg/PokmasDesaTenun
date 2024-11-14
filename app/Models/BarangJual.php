<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangJual extends Model
{
    use HasFactory;

<<<<<<<<< Temporary merge branch 1
=========
    protected $table = 'barang_juals';

>>>>>>>>> Temporary merge branch 2
    protected $fillable = [
        'image',
        'name',
        'price',
        'stock',
        'tipe',
        'description',
    ];
    
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
