<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namalengkap', 'name', 'email', 'password','no_handphone', 'role_id', 'dealereo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dealereo()
    {
    	return $this->belongsTo(Dealereo::class);
    }

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }

}
