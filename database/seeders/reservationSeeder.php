<?php

namespace Database\Seeders;
use App\Models\reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\carbon;
use App\Models\customer;

class reservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = customer::inRandomOrder()->first();
        $reservation=[
            [
                'customers_id'=>'1', 
                'FechaReserva'=>carbon::parse(2001-07-01), 
                'NumeroPersonas'=>'23',
            ]

            ];
            foreach($reservation as $reservation){
                reservation::create($reservation);
            }
            \Database\Factories\reservationFactory::new()->count(500)->create();    
    }
}
