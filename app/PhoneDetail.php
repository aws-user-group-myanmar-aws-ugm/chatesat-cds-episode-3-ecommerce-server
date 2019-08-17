<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneDetail extends Model
{
    protected $hidden = ['id', 'phone_id', 'created_at', 'updated_at'];
    //
    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
