<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasSanggarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_sanggars', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->bigInteger('no_wa');
            $table->string('image');
            $table->string('password')-> default(Hash::make('123456789'));
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
        Schema::dropIfExists('petugas_sanggars');
    }
}
