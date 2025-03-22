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
        Schema::create('ajustes', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 255)->nullable();
            $table->string('telefono', 20);
            $table->string('direccion', 255);
            $table->unsignedBigInteger('id_moneda')->default(1);
            $table->string('zona_horaria', 255);
            $table->string('rtn', 50);
            $table->timestamps();

            $table->foreign('id_moneda')->references('id')->on('monedas')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajustes');
    }
};
