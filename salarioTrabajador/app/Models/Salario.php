<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    public $timestamps = false;

    protected $table      = 'salarios';

    protected $primaryKey ='idSalario';

    protected $fillable = ['idSalario',
                            'idTrabajador',
                            'tarifaHora',
                            'horas',
                            'bono',
                            'impuesto',
                            'salarioNeto'];
}
