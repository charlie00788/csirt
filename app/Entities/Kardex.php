<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kardexes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'person_id', 'year', 'course_id'];

    /**
     * Para que devuelva la person
     */
    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function grade()
    {
        return $this->hasOne(Grade::class, 'id', 'grade_id');
    }

    public function especialty()
    {
        return $this->hasOne(Especialty::class, 'id', 'especialty_id');
    }

    public function getNombreCompletoAttribute()
    {
        return $this->grade->grade . " " . $this->especialty->especialty . " " . $this->person->paterno . " " . $this->person->materno . " " . $this->person->nombres;
    }
}
