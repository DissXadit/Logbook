<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sampels', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bn');
            $table->enum('jenis', ['Rutin', 'Non Rutin']);
            $table->datetimeTz('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampels');
    }
};
