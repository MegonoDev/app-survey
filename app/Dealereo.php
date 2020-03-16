<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealereo extends Model
{
    protected $fillable = [
        'kode_dealer'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function members()
    {
        return $this->hasManyThrough('App\Member', 'App\User','dealereo_id', 'sales_id', 'id');
    }

    public function users()
    {
    	return $this->hasMany(User::class,'dealereo_id');
    }
}
