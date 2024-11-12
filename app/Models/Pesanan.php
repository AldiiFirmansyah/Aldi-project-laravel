<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
protected $fillable = [
    'nama_pesanans',
    'id_pesanans',
    'jumlah_pesanans',
];
}
