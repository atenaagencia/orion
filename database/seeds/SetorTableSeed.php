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
            'setor' => 'Publicidade'
        ]);
        DB::table('setors')->insert([
            'setor' => 'Comunicação'
        ]);
    }
}
