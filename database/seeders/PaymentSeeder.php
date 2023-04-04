<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'date' => date("Y-m-d"),
            'amount' => 10000,
            'id_customer' => 1,
            'id_car' => 1,
            'id_service' => 1,
            'service_type' => "location",
        ]);
    }
}
