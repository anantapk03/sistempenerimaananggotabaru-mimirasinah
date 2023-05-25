<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas_sanggars')->insert([
            'email' => 'petugasdummy@gmail.com',
            'nama'=>'Data Dummy',
            'no_wa'=>'083843726598',
            'alamat'=>'Lohbener POLINDRA',
            'password'=>Hash::make('dummy'),
            'image'=>'assets/dashbooard.png'
        ]);
    }
}
