<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea_entrega extends Model
{
    use HasFactory;
    public function tarea()
    {
        return $this->belongsTo(Tarea::class);
    }
    public function inscribirse()
    {
        return $this->belongsTo(Inscribirse::class);
    }
    public function observaciones()
    {
        return $this->hasMany(observacion::class);
    }
}
