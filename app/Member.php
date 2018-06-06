<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'activitie_id',
        'nama', 
        'alamat', 
        'provinsi', 
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'tanggal_lahir',
        'handphone',
        'kode',
        'status',
    ];

    public function activitie()
    {
    	return $this->belongsTo(Activitie::class);
    }
}
