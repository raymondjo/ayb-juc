<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rds')->insert([
            'responsible_name' => "mina",
            'address' => "maadi",
            'husband_name' => "gogo",
            'expire_date' => "2019-10-29"
        ]);

        DB::table('rds')->insert([
            'responsible_name' => "jo",
            'address' => "shobra",
            'husband_name' => "jddj",
            'expire_date' => "2017-10-29"
        ]);
    }
}
