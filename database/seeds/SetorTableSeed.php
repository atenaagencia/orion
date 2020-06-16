<?php

use Illuminate\Database\Seeder;

class SetorTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setors')->insert([
            'setor' => 'Administração'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Publicidade'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Comunicação'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Desenvolvimento'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Criação'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Comercial'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Recursos Humanos'
        ]);
    }
}
