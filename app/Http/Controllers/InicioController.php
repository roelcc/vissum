<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{






    public function index()
    {
        return view('welcome');
    }
    public function Nosotros()
    {
        return view('nosotros');
    }
    public function Servicios()
    {
        return view('servicios');
    }

    public function Casos()
    {
        return view('casos');
    }
    public function Tecnologia()
    {
        return view('tecnologia');
    }
    public function Contacto()
    {
        return view('contacto');
    }
    public function staffMedico()
{
    return view('staff-medico');
}
    public function Article()
    {
        return view('blog.index');
    }
    public function Gracias()
    {
        return view('thanks.gracias');
    }
    public function Phone()
    {
        return view('thanks.phone');
    }
}
