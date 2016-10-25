<?php

use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        for($i=1;$i<50;$i++){
            DB::table('domain')->insert([
            'domain' => str_random(10).'.com',
            'time' => str_random(10),
            'status' => str_random(10),
            ]);
        }
    }
}