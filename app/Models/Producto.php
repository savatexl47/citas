<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable =[
        'categorias_id',
        'nombre',
        'precio',
        'stock',
        'imagen',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }

    //public function recetas()
    //{
       // return $this->belongsTo(Receta::class);
    //}
}
