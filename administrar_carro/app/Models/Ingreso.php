<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehiculos()
    {
        $this->belongsToMany(Vehiculo::class);
    }

}
