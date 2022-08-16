<?php

use Illuminate\Database\Seeder;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Wilson Mateus Domingos",
            "email"=>"wilson.md@hotmail.com",
            "password"=>Hash::make('wilson88'),
            "papal_id"=>1,
           
            ]);
    }
}
