<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;


class ClienteController extends Controller
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
    public function horainicio(Request $request)
    {
        return $request;
    }   

     public function createCita(Request $request)
    {

        // return $request;
        if (Auth::check())
        {
            $idusuario = Auth::user()->id; 

            $user = User::find($idusuario);
            // return $user;
            // foreach($user->citas as $cita)
            // {
            //     $tokenexiste=$cita->pivot->token;
            // }

            // if(!isset($tokenexiste))
            {
                DB::table('user_citas')->insert(
                    ['cita_id' => $request->valor_cita,'token' => $request->_token, 'user_id' =>$idusuario,
                    'descripcion' =>$request->descripcion,'hora_inicio' =>$request->hora_inicio
                     ,'hora_inicio' =>$request->hora_inicio
                     ,'duracion' =>$request->duracion
                     ,'rango_pago' =>$request->rango_pago   
                     ,'ciudad' =>$request->ciudad   
                    ]
                );

              
                 return 1;

            }
           /* else
            {
                DB::table('user_citas')
                ->where('token',$request->_token)
                ->update(['cita_id' => $request->valor_cita,'token' => $request->_token, 'user_id' =>$idusuario,
                    'descripcion' =>$request->descripcion,'hora_inicio' =>$request->hora_inicio
                     ,'hora_inicio' =>$request->hora_inicio
                     ,'duracion' =>$request->duracion
                     ,'rango_pago' =>$request->rango_pago   
                     ,'ciudad' =>$request->ciudad   
                    ]
                    );         
                return 1;

            } */

        }
        else
        {
            return 0;

           }
   
    }



    
}