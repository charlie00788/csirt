<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function month()
    {
        return $this->hasOne(Month::class, 'id', 'month_id');
    }

    public function cargo1()
    {
        return $this->belongsTo(Cargo::class, 'cargo1_id');
    }

    public function cargo2()
    {
        return $this->belongsTo(Cargo::class, 'cargo2_id');
    }

    public function cargo3()
    {
        return $this->belongsTo(Cargo::class, 'cargo3_id');
    }
}
