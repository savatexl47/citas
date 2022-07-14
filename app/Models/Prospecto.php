<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'apellido',
        'edad',
        'profesion',
        'avatar_type',
        'direccion',
        'distrito',
        'documento',
        'estado_civil',
        'red_social_favorita',
        'sexo',
        'hijos',
        'nacionalidad',
        'email',
        'ruc',
        'tel_casa_1',
        'tel_casa_2',
        'movil',
        'fecha_nacimiento',
        'preferencia_en_promociones',
        'fecha_vencimiento',
        'invitado',
        'dias_invitado',
        'asistencia_invitado',
        'nota',
    ];

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function profesiones()
    {
        return $this->belongsTo(Profesione::class);
    }

    public function cargos()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function distritos()
    {
        return $this->belongsTo(Distrito::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
