<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class observacion extends Model
{
    use HasFactory;
    public function tarea_entregada()
    {
        return $this->belongsTo(Tarea_entregada::class);
    }
}
