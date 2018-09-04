<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_type extends Model
{
    protected $primaryKey = 'id_transaction_type';
	protected $fillable = [
        'description',
    ];

    public function Transactions() {
		return $this->hasOne('App\Transaction','id_transaction_type','id_transaction_type');
											   //campoexterno campoDelaTablaBase
	}
}
