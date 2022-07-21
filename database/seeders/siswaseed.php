<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class siswaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $siswa = [
            ['nis'=>'1001','nama'=>'Wanda Nugraha','alamat'=>'Dimana Weh Kepo Maneh Mah','tanggal'=>'2022-12-22'],
            ['nis'=>'1002','nama'=>'Kiki','alamat'=>'Dimana Weh','tanggal'=>'2022-12-25'],
        ];
        DB::table('siswas')->insert($siswa);
    }
}
