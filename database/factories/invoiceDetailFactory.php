<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\order; 
use App\Models\dishes; 

class InvoiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $order = Order::inRandomOrder()->first();
        $dish = Dish::inRandomOrder()->first();

        return [
            'OrdenID' => $order->id,
            'PlatoID' => $dish->id,
            'Cantidad' => $this->faker->randomDigit, 
            'PrecioUnitario' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
