<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'date' => date('Y-m-d'),
            'id_customer' => 1,
            'id_car' =>1,
            'raison'=> Str::random(50)
        ]);
    }
}
