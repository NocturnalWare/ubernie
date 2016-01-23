<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $rules = [];

	protected $fillable = [
       	'user_id',
        'first_name',
        'last_name',
        'bio',
        'phone',
        'status',
	];

	protected $table = 'accounts';

	public function rides(){
		return $this->hasMany('\App\Ride', 'user_id', 'user_id');
	}
}
