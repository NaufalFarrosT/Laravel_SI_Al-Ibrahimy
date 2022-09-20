<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'positionName' => 'Dev',
        ]);

        DB::table('packets')->insert([
            'packetName'=>'Umroh November 2022',
            'departureDate'=>'2022-11-10',
            'arrivalDate'=>'2022-11-23',
            'description'=>'Hotel Grand Al-Masa (Makkah), Hotel Rawabi Al-Zahra (Madinah)',
            'totalPrice'=> 31000000
        ]);
    }
}
