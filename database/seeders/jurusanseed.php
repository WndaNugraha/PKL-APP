<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class jurusanseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jurusan = [
            ['kode'=>'1020','mapel'=>'IPA','semester'=>'2','jurusan'=>'Teknik Mesin']
        ];
        DB::table('jurusans')->insert($jurusan);
    }
}
