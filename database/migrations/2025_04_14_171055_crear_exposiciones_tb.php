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
        Schema::create('tb_exposiciones', function (Blueprint $table) {
            $table->id('expo_id');
            $table->foreignId('obra_id')->constrained('tb_obras')->onDelete('cascade');
            $table->date('expo_fecha_inicio');
            $table->date('expo_fecha_fin');
            $table->string('expo_ubicacion');
            $table->string('expo_nombre_evento');
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
