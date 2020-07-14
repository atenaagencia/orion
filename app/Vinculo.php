<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinculo extends Model
{
    protected $fillable = [
        'associado_id', 'setor_id','cargo_id', 'data_vinculo', 'tipo_vinculo', 'supervisor_id',
    ];

    public function cargos()
    {
        return $this->belongsTo('App\Cargo', 'cargo_id');
    }

    public function setor_associado()
    {
        return $this->belongsTo('App\Setor', 'setor_id');
    }
    public function supervisor()
    {
        return $this->belongsTo('App\Associado', 'supervisor_id');
    }
    public function logs()
    {
        return $this->hasMany('App\LogAssociado', 'vinculo_id');
    }
}
