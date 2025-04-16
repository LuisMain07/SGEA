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
        Schema::create('tb_obras', function (Blueprint $table) {
            $table->id('obra_id');
            $table->foreignId('art_id')->constrained('tb_artistas')->onDelete('cascade');
            $table->string('obra_titulo');
            $table->year('obra_año');
            $table->string('obra_tecnica');
            $table->string('obra_dimensiones');
            $table->text('obra_descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
