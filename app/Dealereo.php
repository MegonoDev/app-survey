<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealereo extends Model
{
    protected $fillable = [
        'nama',
        'organizer_id',
        'role_id'
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
}
