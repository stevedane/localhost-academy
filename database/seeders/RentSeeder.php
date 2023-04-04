<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            'start' => date('Y-m-d'),
            'end' => date('Y-m-d'),
            'id_car' => 1,
            'id_customer' => 1,
        ]);
    }
}
