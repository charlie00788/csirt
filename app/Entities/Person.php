<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'paterno', 'materno',
        'nombres', 'city_id', 'grade_id',
        'especialty_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function getNameComplete()
    {
        return $this->paterno . " " . substr($this->materno, 0, 1) . ". " . $this->nombres;
    }

    public function getNombreCompletoAttribute()
    {
        return $this->paterno . " " . $this->materno . " " . $this->nombres;
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}
