<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Method pembantu untuk mengambil kata pertama / singkatan dari nama layanan
    public static function getSingkatan($nama)
    {
        $words = explode(' ', trim($nama));
        return strtoupper($words[0] ?? 'SERVICE');
    }
}