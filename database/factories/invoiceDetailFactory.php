<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order; // Asegúrate de usar la convención de nombres correcta
use App\Models\Dishes; // Asegúrate de usar la convención de nombres correcta
use App\Models\InvoiceDetail;

class InvoiceDetailFactory extends Factory
{
    protected $model = InvoiceDetail::class;

    public function definition()
    {
        $order = Order::inRandomOrder()->first();
        $dishes = Dishes::inRandomOrder()->first();

        return [
            'OrdenID' => $order->id,
            'PlatoID' => $dishes->id,
            'Cantidad' => $this->faker->randomDigit,
            'PrecioUnitario' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
