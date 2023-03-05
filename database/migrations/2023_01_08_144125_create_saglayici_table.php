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
        Schema::create('saglayici', function (Blueprint $table) {
            $table->id();
            $table->enum('saglayici_tipi' , ['SAHIS' , 'AJANS']);
            $table->string('ad')->nullable();
            $table->string('ajans_adi')->nullable();
            $table->string('soyad')->nullable();
            $table->string('yetkili')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
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
        Schema::dropIfExists('saglayici');
    }
};
