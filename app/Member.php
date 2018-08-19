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
        'status_verifikasi',
        'pekerjaan',
        'perkawinan',
        'kendaraan',
        'id_kab',
        'motorbaru',
        'operator_input'
    ];

    public function dealereo()
    {
    	return $this->belongsTo(Dealereo::class);
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
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y H:i:s');
    }

   public function getStatusverifikasiAtAttribute()
    {
        if ($this->attributes['status_verifikasi'] == 0)
        {
            return '<span class="badge badge-danger">Belum Di Verifikasi</span>';
        } else {
            return '<span class="badge badge-success">Sudah Di Verifikasi</span>';
        }
    }
}
