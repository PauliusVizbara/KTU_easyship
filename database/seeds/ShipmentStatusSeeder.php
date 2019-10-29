<?php

use Illuminate\Database\Seeder;

class ShipmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipment_statuses')->insert([
            'name' => 'Ordered',
        ]);

        DB::table('shipment_statuses')->insert([
            'name' => 'In transit',
        ]);

        DB::table('shipment_statuses')->insert([
            'name' => 'Completed',
        ]);
    }
}
