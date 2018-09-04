<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assembly_asistant extends Model
{
    protected $primaryKey = 'id_assembly';
	protected $fillable = [
        'id_shareholder', 'participation_percentage',
    ];

    public function Assemblies() {
		return $this->hasMany('App\Assembly','id_assembly','id_assembly');
											   //campoexterno campoDelaTablaBase
	}
	
	public function Shareholders() {		
		return $this->hasMany('App\Shareholder', 'id_shareholder', 'id_shareholder');
	}
}
