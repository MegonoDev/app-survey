<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = ['id_kel','id_kec','nama'];
    protected $primaryKey = 'id_kel';
    protected $table = 'kelurahans';

    public function kecamatan()
    {
    	return $this->belongsTo('App\Kecamatan');
    }

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
