<?php

use Illuminate\Database\Seeder;

class Servicoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert(["nome_servico"=>"Vistos"]);
        DB::table('servicos')->insert(["nome_servico"=>"Cartões"]);
        DB::table('servicos')->insert(["nome_servico"=>"PASSAPORTE"]);
        DB::table('servicos')->insert(["nome_servico"=>"Movimentos Migratorio"]);
        DB::table('servicos')->insert(["nome_servico"=>"Lista Negra"]);
        DB::table('servicos')->insert(["nome_servico"=>"Agendamento Passaporte"]);
        DB::table('servicos')->insert(["nome_servico"=>"Movimento Migratorio"]);
    }
}
