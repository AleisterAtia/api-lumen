<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_rumahsakit', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rs');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('tipe_rs');
            $table->double('lat');
            $table->double('lng');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_rumahsakit');
    }
};
