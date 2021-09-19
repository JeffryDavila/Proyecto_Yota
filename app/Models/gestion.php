<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestion extends Model
{
    use HasFactory;

    protected $table='tbl_gestion';
    protected $primaryKey = 'id_gestion';

    protected $fillable = ['codigo_gestion','nombre_gestion','aplica_visita_tecnica','id_usuario','fecha_creacion'];

    public $timestamps = false;
}
