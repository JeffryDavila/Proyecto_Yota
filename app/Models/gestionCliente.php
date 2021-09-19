<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestionCliente extends Model
{
    use HasFactory;

    protected $table='tbl_gestionCliente';
    protected $primaryKey = 'codigo_gestion_cliente';

    protected $fillable = ['codigo_gestion','atendido','fecha_creacion'];

    public $timestamps = false;
}
