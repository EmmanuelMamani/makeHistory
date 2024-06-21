<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
    public function entregas()
    {
        return $this->hasMany(Tarea_entregada::class);
    }
    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }
}
