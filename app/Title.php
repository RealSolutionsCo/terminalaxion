<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $primaryKey = 'id_title';
	protected $fillable = [
        'id_class_title', 'id_shareholder', 'amount_shares', 'nominal_value', 
        'total_value',
    ];

    public function Titles() {
		return $this->hasMany('App\Title','id_class_title','id_class_title');
											   //campoexterno campoDelaTablaBase
    }
    
    public function Titles_father() {
        return $this->hasOne('App\Transaction','id_father_title','id_title');
											   //campoexterno campoDelaTablaBase
    }

    public function Titles_son() {
        return $this->hasOne('App\Transaction','id_son_title','id_title');
											   //campoexterno campoDelaTablaBase
    }
}
