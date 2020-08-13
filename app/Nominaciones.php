<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nominaciones extends Model
{
    protected $fillable = [ 'clienteVendedor', 'clienteComprador','numContrato',
                            'producto', 'eta', 'cutOff', 'naviera', 'motonave',
                            'viaje', 'booking', 'puerto', 'numContainer', 'tmContainer',
                            'unidadesContainer', 'toneladas','supervision','tipoContainer', 'instrucciones1',
                            'instrucciones2', 'instrucciones3'];
}
