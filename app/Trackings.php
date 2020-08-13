<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trackings extends Model
{
    protected $fillable = [ 'evento ', 'numNominacion ', 'toneladasNominadas',
                            'almacenDestino', 'placaCabezote', 'numContainer ',
                            'cantidad'
    ];
}
