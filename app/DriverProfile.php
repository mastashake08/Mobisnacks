<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverProfile extends Model
{
    //
 	public $fillable = [
	'address'
	];

	public function user(){
	return $this->belongsTo('App\User');
	}
}
