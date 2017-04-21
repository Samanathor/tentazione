<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_cita extends Model
{
    	protected $table='user_citas';


	  public function proveedores(){
        return $this->belongsToMany('\App\Proveedor','user_cita_proveedor')
            ->withPivot('usercita_id','proveedor_id');
    }
   
}
