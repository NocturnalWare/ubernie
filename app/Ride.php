<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
	protected $rules = [];

	protected $fillable = [
       	'user_id',
        'ride_name',
        'seats',
        'leaving',
        'returning',
	];

	protected $table = 'accounts';

	public function rides(){
		return $this->belongsTo('\App\Account', 'user_id', 'user_id');
	}

}
