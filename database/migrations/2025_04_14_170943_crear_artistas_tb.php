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
        Schema::create('tb_artistas', function (Blueprint $table) {
            $table->id('art_id');
            $table->string('art_nombre');
            $table->string('art_apellido');
            $table->string('art_nacionalidad');
            $table->text('art_biografia');
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
