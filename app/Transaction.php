<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'id_transaction';
	protected $fillable = [
        'id_title', 'id_transaction_type', 'id_holder', 'id_addressee', 
        'n_transferred_actions', 'id_father_title', 'title_class', 'value_father_title', 
        'n_father_actions', 'id_son_title','value_son_title', 'n_son_actions',
        'date_transaction', 'n_aprobation', 'observations', 
    ];

    public function Titles() {
		return $this->hasMany('App\Title','id_title','id_title');
											   //campoexterno campoDelaTablaBase
    }

    public function Transaction_types() {
		return $this->hasMany('App\Transaction_type','id_transaction_type','id_transaction_type');
											   //campoexterno campoDelaTablaBase
    }
    public function Holders() {
		return $this->hasMany('App\Shareholder','id_holder','id_shareholder');
											   //campoexterno campoDelaTablaBase
    }

    public function Addressees() {
		return $this->hasMany('App\Shareholder','id_addressee','id_shareholder');
											   //campoexterno campoDelaTablaBase
    }

    public function Fathers() {
		return $this->hasMany('App\Title','id_father_title','id_title');
											   //campoexterno campoDelaTablaBase
    }

    public function Sons() {
		return $this->hasMany('App\Title','id_son_title','id_title');
											   //campoexterno campoDelaTablaBase
    }
}
