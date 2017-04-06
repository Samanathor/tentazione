<?php


namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
class ClientesController extends Controller
{
    
    public function createCita(Request $request)
    {

    	if(Auth::check())
    	{
    		
        $idusuario = Auth::user()->id;

        $user = User::find($idusuario); 
        DB::table('user_citas')->insert(
                    ['cita_id' => $request->valor_cita,
                    'token' => $request->_token,
                    'user_id' =>$idusuario,
                    'descripcion' =>$request->descripcion,
                    'hora_inicio' =>$request->hora_inicio,
                    'duracion' =>$request->duracion,
                    'rango_pago' =>$request->rango_pago,   
                    'ciudad' =>$request->ciudad   
                    ]
                );
        
        return 1;
    	}

    } 

    public function horainicio(Request $request)
    {

    	if(Auth::check())
    	{
	        $idusuario = Auth::user()->id;
	       	$user = User::find($idusuario)->citas; 
	       	foreach ($user as $val_user) {
	       		$horaIni=$val_user->pivot->hora_inicio;
	       	}
	       	return array("HoraIni"=>$horaIni);
   		}
    }
}
