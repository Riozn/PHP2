<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\customer;
use carbon\carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reservation>
 */
class reservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = customer::inRandomOrder()->first();
        return [
            'customers_id' =>$customer->id,
             'FechaReserva' =>Carbon::now()->subDays(rand(1,365)) , 
             'NumeroPersonas'=>$this->faker->randomNumber(),
            
        ];
    }
}
