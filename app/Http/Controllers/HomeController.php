<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (Auth::check())
        {
            $idusuario = Auth::user()->id; 
            $Usuarios_todo = User::find($idusuario);
            $Usuarios_todo_Ordenados=$Usuarios_todo->citas()->orderBy('user_citas.created_at', 'asc')->get();

            foreach ($Usuarios_todo_Ordenados as $usuario_todo) {
                $fecha_created=$usuario_todo->pivot->created_at;
            }
         
            $fecha_created=strtotime($fecha_created);
            $nuevafecha = strtotime ( '+1 hour' , $fecha_created ) ;
            $ND=getdate();
            $fechaActual=$ND['year']."-".$ND['mon']."-".$ND['mday']." ".$ND['hours'].":".$ND['minutes'].":".$ND['seconds'];

            $fechaActual=strtotime($fechaActual);

            if( $fechaActual>=$nuevafecha)
            {
                return view('panel');
            }
            else
            {
                 return redirect('/completado');
            }
        }
        else
        {
    return view('index');
        }

    }

    
}
