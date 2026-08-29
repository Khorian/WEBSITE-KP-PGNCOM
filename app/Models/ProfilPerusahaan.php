<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilPerusahaan extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'misi' => 'array',
        'tim_tanggap' => 'array',
        'nilai_perusahaan' => 'array',
    ];
}