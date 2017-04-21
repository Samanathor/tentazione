<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    
	protected $table='proveedores';

	
  
	  public function user_citasx(){
        return $this->belongsToMany('\App\User_cita','user_cita_proveedor')
            ->withPivot('usercita_id','proveedor_id');
		}
}
