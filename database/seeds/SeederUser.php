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
            "name"=>"wildondomingos",
            "email"=>"wilson.md@hotmail.com",
            "nome_institicao"=>'Wilson Mateus Domingos',
            "password"=>Hash::make('wilson88'),
            "papal_id"=>1,
           
            ]);
    }
}
