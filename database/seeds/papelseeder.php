<?php

use Illuminate\Database\Seeder;

class papelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papals')->insert(["designacao"=>"Admin"]);
        DB::table('papals')->insert(["designacao"=>"Normal"]);
    }
}
