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
    Schema::create('info_kontaks', function (Blueprint $table) {
        $table->id();
        $table->string('email')->default('sales@pgncom.co.id');
        $table->string('telepon')->default('(021) 39733645');
        $table->string('jam_senin_kamis')->default('07.30 – 16.00 WIB');
        $table->string('jam_jumat')->default('07.30 – 16.30 WIB');
        $table->text('alamat')->default('Jln. Sam Ratulangi No. 15 Penengahan Raya, Kedaton Bandar Lampung, 35112.');
        $table->timestamps();
    });
}
};
