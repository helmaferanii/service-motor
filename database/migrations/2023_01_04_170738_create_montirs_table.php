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
        Schema::create('montirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_montir');
            $table->string('alamat_montir');
            $table->string('tlp_montir');
            $table->string('status')->default('aktif');
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
        Schema::dropIfExists('montirs');
    }
};
