<?php

namespace App\Http\Controllers;

use App\Models\gestion;
use App\Models\usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;
use DateTimeZone;

class gestionController extends Controller
{
    public function index()
    {
        $usuario=usuario::where('id_usuario',auth()->user()->id_usuario)->first();
        return view('/nuevaGestion',compact('usuario'));
    }

    public function create()
    {
        request()->validate([
            'codigo_gestion' => 'required',
            'nombre_gestion' => 'required',     
            
        ]);

        $dt = new DateTime("now", new DateTimeZone('America/Managua'));

        gestion::create([
            'codigo_gestion' => request('codigo_gestion'),           
            'nombre_gestion' => request('nombre_gestion'),
            'aplica_visita_tecnica' => request('visita_tecnica'),
            'id_usuario' => auth()->user()->id_usuario,
            'fecha_creacion' => $dt->format('Y-m-d'),
        ]);

        return redirect()->route('home');

    }
}
