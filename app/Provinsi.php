<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [
        'id_prov',
        'nama'
    ];

    protected $primaryKey = 'id_prov';

    public function members()
    {
    	return $this->hasMany('App\Member');
    }
}
