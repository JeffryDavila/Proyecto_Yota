<?php

namespace App\Http\Controllers;

use App\Models\gestionCliente;
use App\Models\gestion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;
use DateTimeZone;

class gestionClienteController extends Controller
{
    public function create($id_gestion)
    {
        $dt = new DateTime("now", new DateTimeZone('America/Managua'));
        $gestion=gestion::where('id_gestion',$id_gestion)->first();

        gestionCliente::create([          
            'codigo_gestion' => $id_gestion,
            'atendido' => 0,
            'fecha_creacion' => $dt->format('Y-m-d'),
        ]);
        
        $mensaje=" Gestion Cliente Registrada-Codigo:".$gestion->codigo_gestion." Nombre:".$gestion->nombre_gestion;
        return back()->with('mensaje',$mensaje);

    }
}
