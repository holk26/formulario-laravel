<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function crear()
    {
        return view('crear-proyecto');
    }

    public function guardar(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->nombre_proyecto = $request->input('nombre_proyecto');
        $proyecto->contrato_convenio = $request->input('contrato_convenio');
        $proyecto->ciudad = $request->input('ciudad');
        $proyecto->fecha_firma_contrato = $request->input('fecha_firma_contrato');
        $proyecto->valor_contrato = $request->input('valor_contrato');
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }
}
