<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegrasAssociados extends Model
{
    protected $fillable = [
        'associado_id', 'regra_id'
    ];

    public function associado()
    {
        return $this->belongsTo('App\Associado', 'associado_id');
    }
    public function regras()
    {
        return $this->belongsTo('App\Regra', 'regra_id');
    }
}
