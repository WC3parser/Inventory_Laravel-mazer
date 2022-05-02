<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'nama' => 'Miftahul Ulum',
            'alamat' => 'Cipondoh',
            'no_telp' => '0896617328',
        ]);
    }
}
