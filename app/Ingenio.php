<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingenio extends Model
{
    protected $allowedFields = ['nitCliente', 'nombreCliente', 'nitVendedor', 'empresaVendedora', 'mesEntrega', 'toneladas', 'tasaCambio', 'precio',
    'prima', 'tipoProducto', 'producto', 'paisDestino', 'terminoIncoterm','observacion'];
}
