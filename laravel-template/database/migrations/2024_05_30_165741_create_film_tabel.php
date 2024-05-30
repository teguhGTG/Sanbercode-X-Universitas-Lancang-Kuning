<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster', 45);
            $table->foreignId('genre_id')->constrained('genre_table')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('film_tabel');
    }
};
