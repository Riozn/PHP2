<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $primaryKey = 'id';
    protected $fillable = ['customers_id', 'FechaReserva', 'NumeroPersonas'];
    
    // Define una relación con la tabla 'customers'
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
