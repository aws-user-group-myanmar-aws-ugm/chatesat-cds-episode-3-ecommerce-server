<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany(Phone::class);
    }
}
