<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function kardex()
    {
        return $this->belongsTo(Kardex::class, 'kardex_id');
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function getNotaLiteralAttribute()
    {
        $calificacion = $this->nota;
        $notas = str_split($calificacion);
        $literal = '';
        foreach($notas as $nota){
            $nota = $this->numALetra($nota);
            $literal = $literal.$nota;
        }
        return $literal;
    }

    private function numALetra($num)
    {
        switch($num){
            case '0':
                return 'Cero ';
            case '1':
                return 'Uno ';
            case '2':
                return 'Dos ';
            case '3':
                return 'Tres ';
            case '4':
                return 'Cuatro ';
            case '5':
                return 'Cinco ';
            case '6':
                return 'Seis ';
            case '7':
                return 'Siete ';
            case '8':
                return 'Ocho ';
            case '9':
                return 'Nueve ';
            case 'd':
                return 'De ';
            case ',':
                return 'Coma ';
            case '/':
                return 'Barra ';
            case '.':
                return 'Punto ';
            default:
                return '';
        }
    }
}
