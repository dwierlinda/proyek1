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
        Schema::create('arikel', function (Blueprint $table) {
            $table->integer('id_artikel')->primary();
            $table->string('judul');
            $table->longText('isi_artikel');
            $table->dateTime('tanggal_rilis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arikel');
    }
};
