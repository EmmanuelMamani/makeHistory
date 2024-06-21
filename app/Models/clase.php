<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clase extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function inscribirse()
    {
        return $this->hasMany(Inscribirse::class);
    }
    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }
}