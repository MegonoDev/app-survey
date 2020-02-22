<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ['id_kec','id_kab','nama'];
    protected $primaryKey = 'id_kec';
    protected $table = 'kecamatans';
    
    public function kabupaten()
    {
    	return $this->belongsTo('App\Kabupaten');
    }

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
