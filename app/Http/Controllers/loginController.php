<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function inicioSesion(){
        return view('inicioSesion');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $user=Auth::user();
            if($user->rol=='estudiante'){
                return redirect()->route('menuEstudiante');
            }
            return redirect()->route('menuProfesor');
        }
        return "error";
    }
    public function menuProfesor(){
        $user=Auth::user();
        return view('profesor',["profesor"=>$user]);
    }
    public function menuEstudiante(){
        return view('indexEstudent');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
