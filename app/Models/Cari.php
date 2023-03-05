<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{
    use HasFactory;
    protected $table = 'cari';
    protected $fillable = [
        'ad',
        'soyad',
        'cinsiyet',
        'dogum_tarihi',
        'ulke',
        'sehir',
        'ilce',
        'dil',
        'iletisime_gecilecek_kisi',
        'kisiye_ait_telefon_numarasi',
        'whatsapp_numarasi_farkli_mi',
        'whatsapp_numarasi',
        'email',
        'saglayici',
        'dark_reklam_kabul_ediyor_mu',
        'evinde_evcil_hayvan_besliyor_mu',
        'organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu',
        'sehir_disi_etkinliklere_seyehay_engeli_var_mi',
        'sirketi_var_mi',
        'urun_karsiligi_tanitim_yapiyor_mu',
    ];

    public function saglayici()
    {
        return $this->hasOne(Saglayici::class , 'id' , 'saglayici');
    }

    public function ulke()
    {
        return $this->hasOne(Ulke::class , 'id' , 'ulke');
    }

    public function sehir()
    {
        return $this->hasOne(Sehir::class , 'id' , 'sehir');
    }

    public function ilce()
    {
        return $this->hasOne(Ilce::class , 'id' , 'ilce');
    }

    public function language()
    {
        return $this->hasOne(Diller::class , 'language_id' , 'dil');
    }
}
