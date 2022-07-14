<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
    ];

    //public function productos()
    //{
        //return $this->belongsTo(Producto::class);
    //}
}
