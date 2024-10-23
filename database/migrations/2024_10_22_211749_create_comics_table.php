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
        /**
         * we will add title
         * description
         * thumb as image
         * price
         * seriesc type
         * artists array that we will implode
         * and writers array that we will implode
         */
        Schema::create('comics', function (Blueprint $table) {
            $table->id(); // id incrementale
            $table->string('title', 100)->nullable(false);
            $table->text('description')->nullable(true);
            $table->string('image', 1024)->nullable(false);
            $table->string('series', 64)->nullable(false);
            $table->decimal('price', 8, 2)->unsigned();
            $table->string('type', 64)->nullable(false);
            $table->string('artists', 255)->nullable(true);
            $table->string('writers', 255)->nullable(true);
            $table->timestamps(); 
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
