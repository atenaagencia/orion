<?php

use Illuminate\Database\Seeder;

class RegrasTableSeed extends Seeder
{
 

    public function run()
    {
        $regras_associados = [
            ['regra' => 'all', 'descricao' => 'Listar todos os Associados'],
            ['regra' => 'view', 'descricao' => 'Visualizar associado'],
            ['regra' => 'create', 'descricao' => 'Cadastrar associado'],
            ['regra' => 'edit', 'descricao' => 'Editar associado'],
            ['regra' => 'update', 'descricao' => 'Atualizar associado'],
            ['regra' => 'delete', 'descricao' => 'Deletar associado'],
        ];

        foreach ($regras_associados as $regras => $regra) {
            DB::table('regras')->insert([
                'entidade' => 'associado',
                'regra' => $regra['regra'],
                'descricao' => $regra['descricao'],
            ]);
        }

      
    }
}
