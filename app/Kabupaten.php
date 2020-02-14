<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $fillable = [
        'id_kab',
        'id_prov',
        'nama',
    ];

    protected $primaryKey = 'id_kab';

    public function provinsi()
    {
    	return $this->belongsTo('App\Provinsi');
    }

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
