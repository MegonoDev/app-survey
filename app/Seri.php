<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seri extends Model
{
    protected $table = 'seri';
    protected $fillable = [
        'id_merk',
        'id_seri',
        'nama',
    ];

    protected $primaryKey = 'id_seri';

    public function merk()
    {
    	return $this->belongsTo('App\Merk');
    }

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
