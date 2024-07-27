<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehiculo;

class Propietario extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehiculos()
    {
        return $this->belongsToMany(Vehiculo::class);
    }

}
