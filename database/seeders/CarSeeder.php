<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            'imma'=> 'LT347JT',
            'model'=> '4x4',
            'cylindre'=> 12,
            'marque'=> 'TOYOTA',
        ]);
    }
}
