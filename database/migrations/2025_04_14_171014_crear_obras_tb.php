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
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artista_id')->constrained('artistas')->onDelete('cascade');
            $table->string('titulo');
            $table->year('año');
            $table->string('tecnica');
            $table->string('dimensiones');
            $table->text('descripcion');
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
