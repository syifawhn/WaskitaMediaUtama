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
        Schema::create('orderan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyelenggara');
            $table->string('nama_event');
            $table->date('jadwal_event');
            $table->string('alamat_event');
            $table->string('properti');
            $table->string('team');
            $table->integer('biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderan');
    }
};
