<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'pekerjaan',
        'perkawinan',
        'id_prov',
        'id_kab',
        'organizer_id',
        'dealereo_id',
        'location_id'
    ];

    public function provinsi()
    {
    	return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
    	return $this->belongsTo(Kabupaten::class);
    }

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

    public function getTanggallahirAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->format('d-M-Y');
    }

    public function getLaporanbulanAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('M-Y');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function getJeniskelaminAttribute()
    {
        if ($this->attributes['jenis_kelamin'] == 1)
        {
            return 'laki-laki';
        } else {
            return 'perempuan';
        }
    }
}
