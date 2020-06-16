<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Associado extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','nome_social', 'cpf', 'rg', 'data_nasc', 'nome_mae', 'cep', 'rua', 'bairro', 'numero', 'cidade', 'uf', 'email_pessoal', 'email_inst', 'escolaridade', 'instituicao', 'turno_aula', 'area_formacao', 'especializacao', 'talentos', 'password', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function vinculo()
    {
        return $this->hasOne('App\Vinculo','associado_id');
    }
    public function regras()
    {
        return $this->hasMany('App\RegrasAssociados', 'associado_id');
    }




  
    
  
}