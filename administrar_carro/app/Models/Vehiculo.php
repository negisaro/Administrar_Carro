<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propietario;

class Vehiculo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function ingresos()
    {
        $this->belongsToMany(Ingreso::class);
    }
}
