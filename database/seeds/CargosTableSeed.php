<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            'cargo'=>'Diretor'
        ]);

        DB::table('cargos')->insert([
            'cargo' => 'Gestor'
        ]);

    }
}
