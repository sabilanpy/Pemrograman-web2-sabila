<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'nim' => 'D122311005',
                'nama' => 'Sabila Nopiyanti',
                'email' => 'sabilanpy03@gmail.com',
                'alamat' => 'Jln Pesantren Cimahi',
            ],
        ]);
    }
}
