<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'dummy3@gmail.com',
            'nama'=>'Anggota',
             'alamat'=>'',
             'no_wa'=>'083843726598',
             'level'=>'anggota',
             'password'=>bcrypt('dummy')
        ]);
    }
}
