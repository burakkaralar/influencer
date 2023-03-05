<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cari', function (Blueprint $table) {
            $table->id();
            $table->string('ad')->nullable();
            $table->string('soyad')->nullable();
            $table->enum('cinsiyet' , ['ERKEK' , 'KADIN' , 'LGBT+']);
            $table->string('dogum_tarihi')->nullable();
            $table->integer('ulke')->nullable();
            $table->integer('sehir')->nullable();
            $table->integer('ilce')->nullable();
            $table->integer('dil')->nullable();
            $table->enum('iletisime_gecilecek_kisi' , ['KENDI' , 'AJANS']);
            $table->string('kisiye_ait_telefon_numarasi')->nullable();
            $table->enum('whatsapp_numarasi_farkli_mi' , ['EVET' , 'HAYIR']);
            $table->string('whatsapp_numarasi')->nullable();
            $table->string('email')->nullable();
            $table->integer('saglayici')->nullable();
            $table->enum('sirketi_var_mi' , ['SAHIS_SIRKETI' , 'LIMITED' , 'SERBEST_MESLEK' , 'ISTISNA_BELGESI' , 'BILINMIYOR']);
            $table->enum('urun_karsiligi_tanitim_yapiyor_mu' , ['EVET' , 'URUNE_GORE' , 'HAYIR' , 'BILINMIYOR' ]);
            $table->enum('evinde_evcil_hayvan_besliyor_mu' , ['EVET' , 'HAYIR' , 'BILINMIYOR' ]);
            $table->enum('sehir_disi_etkinliklere_seyehay_engeli_var_mi' , ['EVET' , 'HAYIR' , 'BILINMIYOR' ]);
            $table->enum('dark_reklam_kabul_ediyor_mu' , ['EVET'  , 'HAYIR' , 'BILINMIYOR' ]);
            $table->enum('organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu' , ['EVET' , 'PROJEYE_GORE' ,'HAYIR' , 'BILINMIYOR' ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cari');
    }
};
