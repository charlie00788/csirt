<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function unity()
    {
        return $this->belongsTo(Unity::class, 'unity_id');
    }
}
