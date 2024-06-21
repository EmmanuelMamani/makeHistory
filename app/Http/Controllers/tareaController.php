<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Clase;

class tareaController extends Controller
{
    //
    public function tarea($id){
        $tarea= Tarea::find($id);
        return view('comentarios-cuentos',['tarea'=>$tarea]);
    }
    public function crear(Request $request){
        $file = $request->file('imagen');
        $path = $file->store('uploads', 'public');
        $tarea = new tarea();
        $tarea->titulo=$request->titulo;
        $tarea->descripcion=$request->descripcion;
        $tarea->puntos=$request->puntos;
        $tarea->fechaEntrega=$request->fecha;
        $tarea->clase_id=$request->clase_id;
        $tarea->imagen=$path;
        $tarea->save();
        $clase= Clase::find($request->clase_id);
        return redirect()->route('clase', ['id' => $clase->id]);
    }
}
