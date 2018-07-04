<?php

namespace App\Http\Controllers;

class ServiciosController extends Controller
{

    public function Cirugias()
    {
        return view('servicios.cirugias');
    }
    public function consultaOptometria()
    {
        return view('servicios.consulta-optometria');
    }
    public function examenesAdicionales()
    {
        return view('servicios.examenes-adicionales');
    }
    public function examenesAuxiliares()
    {
        return view('servicios.examenes-auxiliares');
    }
    public function oftalmologicaIntegral()
    {
        return view('servicios.consulta-oftalmologica-integral');
    }
    public function Optica()
    {
        return view('servicios.optica');
    }

}