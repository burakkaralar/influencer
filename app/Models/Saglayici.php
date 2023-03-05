<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saglayici extends Model
{
    use HasFactory;
    protected $table = 'saglayici';
    protected $fillable = [
        'ad',
        'ajans_adi',
        'email',
        'saglayici_tipi',
        'soyad',
        'telefon',
        'yetkili'
    ];
}
