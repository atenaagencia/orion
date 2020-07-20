<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AssociadosTableSeed::class);
        $this->call(CargosTableSeed::class);
        $this->call(SetorTableSeed::class);
        $this->call(RegrasTableSeed::class);
        $this->call(FuncoesTableSeed::class);
        $this->call(VinculoFuncaoTableSeed::class);
        $this->call(ClienteTableSeed::class);
        $this->call(CategoriaServicoTableSeed::class);
        $this->call(ServicoTableSeed::class);
    }
}

