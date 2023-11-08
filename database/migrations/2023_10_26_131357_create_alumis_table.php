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
        Schema::create('alumis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumi');
            $table->string('tahun_lulus');
            $table->string('jurusan');
            $table->string('foto')->nullable();
            $table->string('slug_alumi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumis');
    }
};
