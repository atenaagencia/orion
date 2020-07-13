<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAssociado extends Model
{
    protected $fillable = [
        'vinculo_id',
        'user_id',
        'descricao'
    ];

    public function responsavel()
    {
        return $this->belongsTo('App\Associado', 'user_id');
    }
}
