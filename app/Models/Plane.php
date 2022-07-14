<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'monto',
        'estado',
        'sesiones',
        'dias',
        'hora_inicio',
        'hora_fin',
        'd1',
        'd2',
        'd3',
        'd4',
        'd5',
        'd6',
        'd7',
    ];

    public function asociados()
    {
        return $this->belongsTo(Asociado::class);
    }

    public function pagos()
    {
        return $this->belongsTo(Pago::class);
    }
}
