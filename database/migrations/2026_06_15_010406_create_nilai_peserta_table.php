<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai_peserta', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('nopeserta', 5);
            $table->integer('nilaiteori');
            $table->integer('nilaipraktek');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai_peserta');
    }
};
