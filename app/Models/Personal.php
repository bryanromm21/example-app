<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $fecha_nacimiento
 * @property $CI
 * @property $sexo
 * @property $email
 * @property $contacto_enmergencia
 * @property $cargos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo $cargo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personal extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'edad', 'fecha_nacimiento', 'CI', 'sexo', 'email', 'contacto_enmergencia', 'cargos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'cargos_id', 'id');
    }
    
}
