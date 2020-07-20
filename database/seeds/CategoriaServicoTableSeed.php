<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaServicoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_servicos')->insert([
            'categoria' => 'Identidade Visual'
        ]);

        DB::table('categoria_servicos')->insert([
            'categoria' => 'Criação'
        ]);
    }
}
