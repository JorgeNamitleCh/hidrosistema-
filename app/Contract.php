<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'tabla051';

	protected $primaryKey = 'contrato';

	protected $keyType = 'string';

	public static function searchContract($contract) {
		return Contract::find(str_pad($contract, 9, '0', STR_PAD_LEFT));
	}
	
}
