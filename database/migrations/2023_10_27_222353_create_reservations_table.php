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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customers_id')->default(1);
            $table->date('FechaReserva');
            $table->bigInteger('NumeroPersonas');
            $table->unsignedBigInteger('mesa_id');
            $table->boolean('Activo')->default(true);
            $table->timestamps();
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('mesa_id')->references('id')->on('mesas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
