<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function getEstadoAttribute()
    {
        if($this->active) return 'Vigente';
        else return 'Desactivado';
    }

    public function grade()
    {
        return $this->hasOne(Grade::class, 'id', 'grade_id');
    }

    public function especialty()
    {
        return $this->hasOne(Especialty::class, 'id', 'especialty_id');
    }

    public function person()
    {
        return $this->hasOne(Person::class, 'id', 'person_id');
    }

    public function getCarguitoAttribute()
    {
        if($this->cargo == 'eva') return 'DIRECTOR DE EVALUACIÓN Y BECAS';
        if($this->cargo == 'ins') return 'RESPONSABLE DIV. "H" CONVALIDACIÓN Y CERTIFICACIÓN';
        if($this->cargo == 'dep') return 'DECANO DE LA FACULTAD CIENCIAS Y ARTES MILITARES NAVALES';
    }
}
