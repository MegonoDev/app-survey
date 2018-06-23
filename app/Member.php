<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'activitie_id',
        'nama',
        'jenis_kelamin', 
        'alamat', 
        'tempat_lahir',
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
