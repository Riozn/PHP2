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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->unsignedBigInteger('OrdenID')->default(1);; // Usa el nombre correcto de la columna en la tabla orders
            $table->unsignedBigInteger('PlatoID')->default(1);; // Cambia a bigIncrements para coincidir con la definición de dish
            $table->integer('Cantidad',50);
            $table->decimal('PrecioUnitario', 50,9)->notNull();
            $table->timestamps();
            
        
            // Restricción de clave foránea para OrdenID
            $table->foreign('OrdenID')->references('OrdenID')->on('orders');
        
            // Restricción de clave foránea para PlatoID
            $table->foreign('PlatoID')->references('id')->on('dishes');
  
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
