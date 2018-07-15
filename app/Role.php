<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    public function dealereos()
    {
        return $this->hasMany(Dealereo::class, 'role_id');
    }

    public function getNameCollAttribute()
    {
        if ($this->name == superadmin) 
        {
            return '';
        } 
    }
}
