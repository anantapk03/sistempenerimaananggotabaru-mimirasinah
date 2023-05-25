<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'email' => 'anggotadummy@gmail.com',
            'nama'=>'Data Dummy',
            'no_wa'=>'083843726598',
            'alamat'=>'Lohbener POLINDRA',
            'password'=>bcrypt('12345'),
            'image'=>'assets/dashbooard.png'
        ]);
    }
}
