<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public $timestamps = false;

    protected $table      = 'trabajadores';

    protected $primaryKey ='idTrabajador';

    protected $fillable = ['idTrabajador','nombreTrabajador', 'apellidoTrabajador'];
}
