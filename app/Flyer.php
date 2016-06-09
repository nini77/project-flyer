<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

	protected $fillable = [

  	'street',
    'city',
    'zip' ,
    'state' ,
    'country',
    'price',
    'description'
	];

    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }

    public function scopeLocatedAt($query,$zip,$street)
    {
        $street = str_replace('_', ' ', $street);
        return $query->where(compact('zip','street'));
    }
}
