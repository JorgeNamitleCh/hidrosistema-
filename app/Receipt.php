<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = 'tabla063';

	protected $primaryKey = 'contrato';

	protected $keyType = 'string';

	public static function searchContract($contract) {
		return Facturation::find(str_pad($contract, 9, '0', STR_PAD_LEFT));
	}
}
