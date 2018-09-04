<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assembly_type extends Model
{
    protected $primaryKey = 'id_assembly_type';
	protected $fillable = [
        'description',
    ];

    public function Assemblies() {
		return $this->hasOne('App\Assembly','id_assembly_type','id_assembly_type');
											   //campoexterno campoDelaTablaBase
	}
}
