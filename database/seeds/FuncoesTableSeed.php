<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncoesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcoes')->insert([
            'funcao' => 'Back'
        ]);

        DB::table('funcoes')->insert([
            'funcao' => 'Front'
        ]);

        DB::table('funcoes')->insert([
            'funcao' => 'designer ui'
        ]);
    }
}
