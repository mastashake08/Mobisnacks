<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
 	public $fillable = [
	'address',
  'phone'
	];

	public function user(){
	return $this->belongsTo('App\User');
	}
}
