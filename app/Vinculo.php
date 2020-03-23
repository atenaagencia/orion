<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinculo extends Model
{
    protected $fillable = [
        'associado_id', 'setor', 'data_vinculo','tipo_vinculo', 'supervisor',
    ];

   public function cargos()
   {
       return $this->belongsToMany('App\Cargo', 'cargos_vinculos');
   }

}


