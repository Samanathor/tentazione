<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    
protected $table = 'citas';

 public function users(){
        return $this->belongsToMany('\App\User','user_citas')
            ->withPivot('user_id');
    }
   
}
