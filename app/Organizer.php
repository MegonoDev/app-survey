<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function member()
    {
    	return $this->hasOne('App\Member');
    }

    public function dealereo()
    {
    	return $this->hasMany(Dealereo::class, 'organizer_id');
    }
}
