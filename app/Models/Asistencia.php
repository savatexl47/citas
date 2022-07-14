<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable =[
        'fecha',
        'socio',
        'ingreso',
        'salida',
        'estado',
        'llaves',
        'devolvio_llave',
        'toalla',
        'devolvio_toalla',
        'disciplina',
        'plan',
        'fecha_rev',
        'deuda',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function asociados()
    {
        return $this->belongsTo(Asociado::class);
    }

    public function disciplinas()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function planes()
    {
        return $this->belongsTo(Plane::class);
    }
}
