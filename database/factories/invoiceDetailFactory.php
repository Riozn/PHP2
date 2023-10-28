<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\order; 
use App\Models\dishes; 
use App\Models\invoiceDetail;

class InvoiceDetailFactory extends Factory
{
    protected $model = InvoiceDetail::class;

    public function definition()
    {
        $order = order::inRandomOrder()->first();
        $dishes = dishes::inRandomOrder()->first();

        return [
            'OrdenID' => $order->id,
            'PlatoID' => $dishes->id,
            'Cantidad' => $this->faker->randomDigit,
            'PrecioUnitario' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
