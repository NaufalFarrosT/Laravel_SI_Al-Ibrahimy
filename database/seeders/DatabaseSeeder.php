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

        DB::table('customers')->insert([
            'NIK'=>'1234567890',
            'custName'=>'Fulan',
            'custDOB'=>'2022-11-23',
            'custAddress'=>'Jl. A.Yani 32, Waru, Sidoarjo',
            'custGender'=> "Pria",
            'custTelpNumber'=> 6281211111111,
            'custJob'=> 'Pelajar',
            'custJobAddress'=> 'Jl. Oke universitas ulala'
        ]);
    }
}
