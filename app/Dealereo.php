<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealereo extends Model
{
    protected $fillable = [
        'kode_dealer'
    ];

    public function organizer()
    {
    	return $this->belongsTo(Organizer::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function members()
    {
    	return $this->hasMany(Member::class,'dealereo_id');
    }

    public function users()
    {
    	return $this->hasMany(User::class,'dealereo_id');
    }
}
