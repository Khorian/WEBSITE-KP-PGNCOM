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
    Schema::create('layanans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_layanan');
        $table->string('slug')->unique();
        $table->string('kategori'); // Misal: Connectivity, Managed Service, Data Center
        $table->string('ikon')->nullable(); // Class ikon atau path gambar
        $table->text('deskripsi_singkat')->nullable();
        $table->text('deskripsi_lengkap')->nullable();
        $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
