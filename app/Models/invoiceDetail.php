<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoiceDetail extends Model
{
    
        // Indica que no hay una clave primaria definida en el modelo
        protected $primaryKey = null;
    
        // Nombre de la tabla en la base de datos
        public $table = 'invoice_details';
    
        // Atributos que pueden ser asignados en masa (mass-assignable attributes)
        protected $fillable = ['OrdenID', 'PlatoID', 'Cantidad', 'PrecioUnitario'];
    
        // Relación con la tabla 'orders'
        public function order()
        {
            return $this->belongsTo(Order::class, 'OrdenID');
        }
    
        // Relación con la tabla 'dishes'
        public function dish()
        {
            return $this->belongsTo(Dish::class, 'PlatoID');
        }
    
    
    
}
