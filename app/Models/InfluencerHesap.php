<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluencerHesap extends Model
{
    use HasFactory;

    protected $table = 'influencer_hesap';

    protected $fillable = [
        'influencer_cari',
        'platform',
        'profil_linkleri',
        'etiketler',
        'dropzone_files',
        'instagram_son_guncellenme',
        'toplam_takipci',
        'toplam_takip_edilen',
        'son_begeni_toplami',
        'son_yorum_toplami',
        'kac_posta_bakildi',
        'profil_resmi',
        'etkilesim_orani',
        'alternatif_mail'
    ];

    public function cari()
    {
        return $this->hasOne(Cari::class , 'id' , 'influencer_cari')->with('saglayici');
    }
}
