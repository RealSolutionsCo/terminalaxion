<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_title extends Model
{
    protected $primaryKey = 'id_class_title';
	protected $fillable = [
        'description',
    ];

    public function Titles() {
		return $this->hasOne('App\Title','id_class_title','id_class_title');
											   //campoexterno campoDelaTablaBase
	}
}
