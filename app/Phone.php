<?php

namespace App;

use Illuminate\Database\Eloquent\model;

class phone extends model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function details() {
        return $this->hasOne(PhoneDetail::class);
    }
}
