<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = [
        'id_merk',
        'nama'
    ];

    protected $primaryKey = 'id_merk';

    public function members()
    {
    	return $this->hasMany('App\Member');
    }
}
