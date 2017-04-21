<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\User;
use Auth;
use App\User_cita;
use DB;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postularse()
    {

        $todoscita=User_cita::all();
        // return $todoscita;
        $data=array('todocitas' => $todoscita );
        return view("proveedores.postularproveedor")->with($data);
    }

    public function postularse_proveedor(Request $request)
    {
        DB::table('user_cita_proveedor')->insert(
            ['usercita_id' => $request->id_cita, 'proveedor_id' => 1]
        );
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 

    public function verificarproveedor(Request $request)
    {
        // $Cita=User_cita::find($request->id_cita);

        $Proveedor_postulado= DB::table('user_cita_proveedor')
            ->select('usercita_id', 'proveedor_id')
            ->where('usercita_id', '=', $request->id_cita)->get();

            foreach ($Proveedor_postulado as $postulado) {
                $ProveedorPostulado[]=$postulado->proveedor_id;
            }
        return array("proveedor_postulado"=>$ProveedorPostulado);
    }

    public function allProveedores(Request $request)
    {
        if (Auth::check())
        {

            $idusuario = Auth::user()->id;
            $user = User::find($idusuario); 
            $Usuarios_todo_Ordenados=$user->citas()->orderBy('user_citas.created_at', 'asc')->get();

       foreach ($Usuarios_todo_Ordenados as $usuariotodo) {
            $cita_id=$usuariotodo->pivot->id;
            $cita_id=$usuariotodo->pivot->id;
       }

            $proveedores= DB::table('user_cita_proveedor')
            ->select('usercita_id', 'proveedor_id')
            ->where('usercita_id', '=', $cita_id)->get();
            foreach ($proveedores as $proveedor) {
                $proveedoresX[]=$proveedor->proveedor_id;
             }

             $ProveedorAll = Proveedor::find($proveedoresX); 
         return view('provedores', [
         'TodosProveedores' => $ProveedorAll,
         ]);

         }
         else
         {
            return view('index');
         }    
    }
}
