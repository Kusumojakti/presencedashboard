<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class murid extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
    ];

}
