<?php

namespace App\Policies;

use App\Associado;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class AssociadoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Associado  $associado
     * @return mixed
     */
    public function viewAny(Associado $associado)
    {        
        foreach ($associado->regras as $r) {
            if($r->regras->entidade == 'associado' && $r->regras->regra == 'all'){
                return true;
            };
        }

        return false;
    }

//     /**
//      * Determine whether the user can view the model.
//      *
//      * @param  \App\Associado  $associado
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
    public function view(Associado $associado)
    {
        foreach ($associado->regras as $r) {
            if ($r->regras->entidade == 'associado' && $r->regras->regra == 'view') {
                return true;
            };
        }
        return false;
    }

//     /**
//      * Determine whether the user can create models.
//      *
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
//     public function create(Associado $associado)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can update the model.
//      *
//      * @param  \App\Associado  $associado
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
//     public function update(Associado $associado, Associado $associado)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can delete the model.
//      *
//      * @param  \App\Associado  $associado
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
//     public function delete(Associado $associado, Associado $associado)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can restore the model.
//      *
//      * @param  \App\Associado  $associado
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
//     public function restore(Associado $associado, Associado $associado)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can permanently delete the model.
//      *
//      * @param  \App\Associado  $associado
//      * @param  \App\Associado  $associado
//      * @return mixed
//      */
//     public function forceDelete(Associado $associado, Associado $associado)
//     {
//         //
//     }
}
