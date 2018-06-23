<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    protected $fillable = [
        'penyelenggara', 
        'nama_event', 
        'slug', 
        'alamat', 
        'start_event',
        'finish_event',
        'keterangan',
        'ketentuan',
        'image',
    ];
    public function setNamaeventAttribute($value)
    {
    	$this->attributes['nama_event'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }
    public function getImagePathAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('eonesia/images/' . $this->image);
        } else {
            return url('eonesia/images/noimage.png');
        }
    }

    public function members()
    {
    	return $this->hasMany(Member::class);
    }

    public function getMulaiEventAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_event'])->format('d-M-Y');
    }
    public function getBerakhirEventAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['finish_event'])->format('d-M-Y');
    }
}
