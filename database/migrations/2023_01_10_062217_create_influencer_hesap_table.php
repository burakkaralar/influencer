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
        Schema::create('influencer_hesap', function (Blueprint $table) {
            $table->id();
            $table->integer('influencer_cari');
            $table->enum('platform' , ['TIKTOK' , 'INSTAGRAM' , 'TWITTER' , 'FACEBOOK']);
            $table->string('profil_linkleri')->nullable();
            $table->json('etiketler')->nullable();
            $table->json('dropzone_files')->nullable();
            $table->json('hesap_bilgileri')->nullable();
            $table->timestamp('instagram_son_guncellenme', $precision = 0)->nullable();
            $table->integer('toplam_takipci')->nullable();
            $table->integer('toplam_takip_edilen')->nullable();
            $table->integer('son_begeni_toplami')->nullable();
            $table->integer('son_yorum_toplami')->nullable();
            $table->integer('kac_posta_bakildi')->nullable();
            $table->text('profil_resmi')->nullable();
            $table->decimal('etkilesim_orani', $precision = 8, $scale = 2)->nullable();
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
        Schema::dropIfExists('influencer_hesap');
    }
};
