<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('bb');
            $table->string('bt');
            $table->string('alamat');
            $table->text('gejala_terpilih');
            $table->string('penyakit');
            $table->boolean('persentase');
            $table->timestamps();

            // $table->foreign('penyakit')->references('kode')->on('penyakits')->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosas');
    }
};
