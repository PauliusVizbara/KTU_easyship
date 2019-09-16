<?php

use Illuminate\Database\Seeder;

class ShipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipments')->insert([
            'name' => Str::random(10),
            'weight' => 1,
            'address' => Str::random(10),
            'lat' => 55,
            'long' => 55,
            'city' => 'Kaunas',
            'status' => 1,
        ]);
    }
}
