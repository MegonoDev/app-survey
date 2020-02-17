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
        // 'kendaraan', diganti dengan merk dan seri
        'id_merk',
        'id_seri',
        'id_kab',
        'id_prov',
        // 'motorbaru', //dihilangkan
        // 'motorbaru1', //dihilangkan
        'operator_input'
    ];

    public function dealereo()
    {
    	return $this->belongsTo(Dealereo::class);
    }

    public function kabupaten()
    {
    	return $this->belongsTo('App\Kabupaten', 'id_kab');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Provinsi', 'id_prov');
    }
    public function seri()
    {
    	return $this->belongsTo('App\Seri', 'id_seri');
    }

    public function merk()
    {
        return $this->belongsTo('App\Merk', 'id_merk');
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
