<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'flyer_photos';
                        flryer_photos
	protected $fillable = ['Photo'];

    public function flyer()
    {
    	return $this->belongsto('App\Flyer');
    }
}
