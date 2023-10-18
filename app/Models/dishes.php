<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dishes extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'dishes';

    // Atributos que pueden ser asignados en masa (mass-assignable attributes)
    protected $fillable = ['Nombre', 'Descripcion', 'Precio'];

    // Define una relación con la tabla 'invoiceDetails'
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'DishID', 'id');
    }

}
