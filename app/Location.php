<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function member()
    {
    	return $this->hasOne(Member::class, 'location_id');
    }
}
