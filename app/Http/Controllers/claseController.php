<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use App\Models\incribirse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tarea;

class claseController extends Controller
{
    //
    public function create(Request $request){
        $clase = new clase();
        $clase->nombreClase= $request->nombre;
        $clase->año= $request->anio;
        $clase->clave= $request->clave;
        $clase->user_id = Auth::user()->id;
        $clase->save();
        return redirect()->route('menuProfesor');
    }
    public function unirse(Request $request){
        $clase = Clase::all()->where('clave',$request->clave)->last();
        $inscripcion= new incribirse();
        $inscripcion->clase_id= $clase->id;
        $inscripcion->user_id = Auth::user()->id;
        $inscripcion->fechaInscripcion = date('Y-m-d');
        $inscripcion->save();
        return redirect()->route('clase', ['id' => $clase->id]);
    }

    public function clase($id){
        $clase= Clase::find($id);
        $tareas= Tarea::all()->where('clase_id',$id);
        return view('literature',['clase'=>$clase,'tareas'=>$tareas]);
    }
}
