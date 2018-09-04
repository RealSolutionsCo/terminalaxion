<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shareholder extends Model
{
    protected $primaryKey = 'id_shareholder';
	protected $fillable = [
        'id_document_type', 'gender', 'sheet_number', 'name', 'lastname',
        'address', 'phone', 'cellphone', 'email', 'account_number',
        'account_type', 'bank_account',
    ];

    public function Document_types() {
		return $this->hasMany('App\Document_type','id_document_type','id_document_type');
											   //campoexterno campoDelaTablaBase
    }
    public function Titles() {
		return $this->hasOne('App\Title','id_shareholder','id_shareholder');
											   //campoexterno campoDelaTablaBase
    }
    public function Holders() {
		return $this->hasOne('App\Transaction','id_holder','id_shareholder');
											   //campoexterno campoDelaTablaBase
    }
    public function Addressees() {
		return $this->hasOne('App\Transaction','id_addressee','id_shareholder');
											   //campoexterno campoDelaTablaBase
    }
    public function Assemblies() {
		return $this->hasOne('App\Assembly','id_shareholder','id_shareholder');
											   //campoexterno campoDelaTablaBase
	}
}
