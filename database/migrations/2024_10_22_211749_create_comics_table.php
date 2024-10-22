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
        Schema::create('comics', function (Blueprint $table) {
            $table->id(); // id incrementale
            $table->string('image, 1024')->nullable(false);
            $table->string('series, 64')->nullable(false);
            $table->integer('price')->unsigned();
            $table->string('artists, 50')->nullable(true);
            $table->timestamps(); // data di creazione
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
