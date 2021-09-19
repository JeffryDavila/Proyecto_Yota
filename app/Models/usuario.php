<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class usuario extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table='tbl_usuario';
    protected $primaryKey = 'id_usuario';

    protected $fillable = ['codigo_usuario','login','password','nombre_usuario','apellido_usuario'];

    public $timestamps = false;
}
