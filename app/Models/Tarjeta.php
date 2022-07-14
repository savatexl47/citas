<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
    ];

    public function pagos()
    {
        return $this->belongsTo(Pago::class);
    }
}
