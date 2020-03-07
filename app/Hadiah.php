<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Hadiah extends Model
{
    protected $table = 'hadiahs';
    protected $fillable = ['kode','member_id','is_hangus'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y H:i:s');
    }
}
