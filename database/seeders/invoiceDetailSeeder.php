<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\invoiceDetail;
use App\Models\order;
use App\Models\dishes;

class invoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = order::inRandomOrder()->first();
        $dishes = dishes::inRandomOrder()->first();
        
       $invoiceDetail =[
        [
            'OrdenID'=>'1', 
            'PlatoID'=>'12',
             'Cantidad'=>'34',
              'PrecioUnitario'=>'23.9'
        ]
        ];
        foreach($invoiceDetail as $invoiceDetail){
            invoiceDetail::create($invoiceDetail);
        }
        \Database\Factories\invoiceDetailFactory::new()->count(50)->create();

    }
}