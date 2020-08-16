<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    protected $allowedFields = ['nitCliente', 'nombreCliente', 'nitVendedor', 'empresaVendedora', 'mesEntrega', 'toneladas', 'tasaCambio', 'precio',
                                'prima', 'tipoProducto', 'producto', 'paisDestino', 'terminoIncoterm','observacion'];
    // $contrato->user
    // Contrato N - 1 User
    /* public function user()
    {
        return $this->belongsTo(User::class);
    }
    */
    
}
