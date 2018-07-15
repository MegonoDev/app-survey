<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'nama',
        'jenis_kelamin', 
        'email',
        'alamat', 
        'tempat_lahir',
        'tanggal_lahir',
        'handphone',
        'kode',
        'status',
        'organizer_id',
        'dealereo_id',
        'location_id'
    ];

    public function organizer()
    {
    	return $this->hasOne('App\Organizer', 'foreign_key');
    }

    public function dealereo()
    {
    	return $this->belongsTo(Dealereo::class);
    }

    public function location()
    {
    	return $this->belongsTo(Location::class);
    }
}
