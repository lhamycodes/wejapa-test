<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            "Your package is on it's way to shipment center",
            "Your package is currently at your pickup location",
            "Your package is currently in Dallas, Texas",
        ];

        foreach ($locations as $location) {
            Order::create([
                'order' => 'Nike Air',
                'location' => $location,
                'tracking_number' => 'ZN0878333',
            ]);
        }
    }
}
