<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements HasName, HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'imagen',
        'email',
        'password',
        'nombre',
        'apellido',
        'direccion',
        'distritos_id',
        'dni',
        'estado_civil',
        'sexo',
        'edad',
        'tel_casa_1',
        'tel_casa_2',
        'movil',
        'fecha_nacimiento',
        'cargos_id',
        'areas_id',
        //'categorias_id',
        'acuerdo',
        'reglamento',
        'fecha_ingreso',
        'fecha_cese',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getFilamentName(): string
    {
        return "{$this->nombre} {$this->apellido}";
    }
    public function getFilamentAvatarUrl(): ?string
    {
        return Storage::url($this->imagen);
    }

    public function asistencias()
    {
        return $this->belongsTo(Asistencia::class);
    }

    public function asociados()
    {
        return $this->belongsTo(Asociado::class);
    }

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function cargos()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function distritos()
    {
        return $this->belongsTo(Distrito::class);
    }

    //public function categorias()
    //{
        //return $this->belongsTo(Categoria::class);
    //}

    public function pagos()
    {
        return $this->belongsTo(Pago::class);
    }
}
