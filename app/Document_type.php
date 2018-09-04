<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_type extends Model
{
    protected $primaryKey = 'id_document_type';
	protected $fillable = [
        'description',
    ];

    public function Shareholders() {
		return $this->hasOne('App\Shareholder','id_document_type','id_document_type');
											   //campoexterno campoDelaTablaBase
	}
}
