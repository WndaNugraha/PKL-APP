<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class nilaiseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nilai = [
            ['nis'=>'12123','kode'=>'1232312','nilai'=>90,'grade'=>'C'],
            ['nis'=>'22','kode'=>'23232323','nilai'=>80,'grade'=>'C'],
        ];
        DB::table('nilais')->insert($nilai);
    }
}
