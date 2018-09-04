<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assembly extends Model
{
    protected $primaryKey = 'id_assembly';
	protected $fillable = [
        'id_assembly_type', 'date_assembly', 'assembly_resolution', 'assembly_name',
         'assembly_observation', 'assembly_cuorum',
    ];

    public function Assembly_Types() {
		return $this->hasMany('App\Assembly_type','id_assembly_type','id_assembly_type');
											   //campoexterno campoDelaTablaBase
    }
    
    public function Assembly_asistants(){
        return $this->hasOne('App\Assembly_asistant', 'id_assembly', 'id_assembly');
    }
}
