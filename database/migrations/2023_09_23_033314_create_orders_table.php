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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('OrdenID');
            $table->unsignedBigInteger('customers_id');
            $table->integer('NumeroPersonas');
            $table->dateTime('FechaOrden');
            $table->timestamps();
            $table->foreign('customers_id')->references('id')->on('customers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
