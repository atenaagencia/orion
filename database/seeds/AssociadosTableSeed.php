<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AssociadosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('associados')->insert([
            'nome' => 'Herbet Junior',
            'cpf' => '04261687550',
            'rg' => '1369825498',
            'data_nasc' => '1991-02-01',
            'nome_mae' => 'Cassia',
            'cep' => '48903726',
            'rua' => 'angari',
            'bairro' => 'centro',
            'numero' => '22',
            'cidade' => 'juazeiro',
            'uf' => 'Bahia',
            'email_pessoal' => 'herbetjr@gmail.com',
            'email_inst' => 'herbetjr@atenaagencia.com',
            'escolaridade' => 'Ensino Superior',
            'instituicao' => 'IfSertao',
            'turno_aula' => null,
            'area_formacao' => null,
            'especializacao' => null,
            'talentos' => null,
            'supervisor' => 'sim',
            'password' => Hash::make('01072015')
        ]);

        DB::table('associados')->insert([
            'nome' => 'Philip Ramon',
            'cpf' => '05424455573',
            'rg' => '1399546430',
            'data_nasc' => '1996-01-16',
            'nome_mae' => 'Hilda',
            'cep' => '48904137',
            'rua' => 'quatro',
            'bairro' => 'centro',
            'numero' => '371',
            'cidade' => 'juazeiro',
            'uf' => 'Bahia',
            'email_pessoal' => 'phill.educacional@gmail.com',
            'email_inst' => 'philipramon@atenaagencia.com',
            'escolaridade' => 'Ensino Superior',
            'instituicao' => 'IfSertao',
            'turno_aula' => null,
            'area_formacao' => 'Computacao',
            'especializacao' => 'Licenciatura em Computação',
            'talentos' => 'nenhum',
            'supervisor' => 'sim',
            'password' => Hash::make('1234')
        ]);
        DB::table('associados')->insert([
            'nome' => 'Moisés Filipe',
            'cpf' => '08889224428',
            'rg' => '1399546430',
            'data_nasc' => '1996-01-16',
            'nome_mae' => 'Hilda',
            'cep' => '48904137',
            'rua' => 'quatro',
            'bairro' => 'centro',
            'numero' => '371',
            'cidade' => 'juazeiro',
            'uf' => 'Bahia',
            'email_pessoal' => 'phill.educacional@gmail.com',
            'email_inst' => 'philipramon@atenaagencia.com',
            'escolaridade' => 'Ensino Superior',
            'instituicao' => 'IfSertao',
            'turno_aula' => null,
            'area_formacao' => 'Computacao',
            'especializacao' => 'Licenciatura em Computação',
            'talentos' => 'nenhum',
            'password' => Hash::make('1234')
        ]);
    }
}
