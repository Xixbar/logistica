<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    // $contrato->user
    // Contrato N - 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
