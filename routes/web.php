<?php
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/postularse', 'ProveedorController@postularse');
Route::post('/postularse', 'ProveedorController@postularse_proveedor');


Route::get('/citas', function(){

	 if (Auth::check())
        {
			$idusuario = Auth::user()->id; 
    		$Usuarios_todo = User::find($idusuario);

        	$Usuarios_todo_Ordenados=$Usuarios_todo->citas()->orderBy('user_citas.created_at', 'asc')->get();
            
            foreach ($Usuarios_todo_Ordenados as $usuario_todo) {
                $fecha_created=$usuario_todo->pivot->created_at;
            }

			 $fecha_created=strtotime($fecha_created);
            $ND=getdate();
            $fechaActual=$ND['year']."-".$ND['mon']."-".$ND['mday']." ".$ND['hours'].":".$ND['minutes'].":".$ND['seconds'];

            $nuevafecha = strtotime ( '+1 hour' , $fecha_created ) ;
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
});

Route::get('/completado', function(){
	 if (Auth::check())
        {
   	    	$idusuario = Auth::user()->id; 
    		$Usuarios_todo = User::find($idusuario);

        	$Usuarios_todo_Ordenados=$Usuarios_todo->citas()->orderBy('user_citas.created_at', 'asc')->get();
            
            foreach ($Usuarios_todo_Ordenados as $usuario_todo) {
                $fecha_created=$usuario_todo->pivot->created_at;
                $id_cita=$usuario_todo->pivot->id;
            }

 			$fecha_created=strtotime($fecha_created);
            $ND=getdate();
            $fechaActual=$ND['year']."-".$ND['mon']."-".$ND['mday']." ".$ND['hours'].":".$ND['minutes'].":".$ND['seconds'];

            $nuevafecha = strtotime ( '+1 hour' , $fecha_created ) ;
				  // $nuevafecha = date ('Y-m-j H:i', $nuevafecha);
            // return $nuevafecha."------".$fechaActual;
             $fechaActual=strtotime($fechaActual);
			if( $fechaActual>=$nuevafecha)
            {
                return view('panel');
            }
			else
			{
				$nuevafecha = date ('Y-m-j H:i', $nuevafecha);
				return view('confirm',["FechaCreacion"=>$nuevafecha,'id_cita'=>$id_cita]);
			}

		}
		else
		{
    		return view('index');
		}
});

Route::get('/chatFront', function(){
	 if (Auth::check())
        {
	return view('chat');
		}
		else
		{
    return view('index');
		}
});



Route::get('/proveedores','ProveedorController@allProveedores');
Route::get('/chat', function(){
	 if (Auth::check())
        {
            $idusuario = Auth::user()->id; 
            $Usuarios_todo = User::find($idusuario);

            $Usuarios_todo_Ordenados=$Usuarios_todo->citas()->orderBy('user_citas.created_at', 'asc')->get();
            
            foreach ($Usuarios_todo_Ordenados as $usuario_todo) {
                $fecha_created=$usuario_todo->pivot->created_at;
                $id_cita=$usuario_todo->pivot->id;
            }

            $fecha_created=strtotime($fecha_created);
            $ND=getdate();
            $fechaActual=$ND['year']."-".$ND['mon']."-".$ND['mday']." ".$ND['hours'].":".$ND['minutes'].":".$ND['seconds'];

            $nuevafecha = strtotime ( '+1 hour' , $fecha_created ) ;
                  // $nuevafecha = date ('Y-m-j H:i', $nuevafecha);
            // return $nuevafecha."------".$fechaActual;
             $fechaActual=strtotime($fechaActual);
            if( $fechaActual>=$nuevafecha)
            {
                
                return view('panel');

             }
            else
            {
                  $emailuser = Auth::user()->email; 
                  $passwuser = Auth::user()->password; 

                return view('chat.index', [
                    'email' => $emailuser,
                    'password' => $passwuser,
                    ]);  
            }
		}
		else
		{
    return view('index');
		}
});

Route::post('anadir-cita', 'ClientesController@createCita');
Route::post('update-horainicio', 'ClientesController@horainicio');
Route::post('verificar-proveedor', 'ProveedorController@verificarproveedor');


