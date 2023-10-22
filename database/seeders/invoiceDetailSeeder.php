<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\invoiceDetail;
use App\Models\order;
use App\Models\dishes;
use Database\Factory\invoiceDetailFactory;

class invoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = order::inRandomOrder()->first();
        $dishes = dishes::inRandomOrder()->first();
        
        $invoiceDetail = [
            [
                'OrdenID' => $order->id,
                'PlatoID' => $dishes->id,
                'Cantidad' => 34,
                'PrecioUnitario' => 23.9
            ]
        ];

        foreach ($invoiceDetail as $item) {
            invoiceDetail::create($item);
        }

        \Database\Factories\invoiceDetailFactory::new()->count(50)->create();
 }
}