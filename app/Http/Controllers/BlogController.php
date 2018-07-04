<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Consejos()
    {
        return view('blog.10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo');
    }

    public function ojosLlorosos()
    {
        return view('blog.porque-tengo-los-ojos-llorosos-aqui-las-principales-razones');
    }
    public function Colirio()
    {
        return view('blog.colirio-gotas-para-los-ojos-cuales-son-adecuados-para-mi');
    }
    public function Cirugia()
    {
        return view('blog.cirugia-ocular-para-mejorar-tu-vista-como-saber-si-es-indicada-para-mi');
    }
    public function Enfermedades()
    {
        return view('blog.enfermedades-oculares-que-vienen-con-la-edad');
    }
    public function ojos()
    {
        return view('blog.que-es-la-conjuntivitis-y-como-podemos-prevenirla-10-consejos');
    }
    public function Lentes()
    {
        return view('blog.lentes-de-contacto-tipos-y-cuales-me-convienen');
    }
    public function Contacto()
    {
        return view('blog.10-consejos-para-quienes-usan-lentes-de-contacto');
    }
    public function Mejores()
    {
        return view('blog.si-usas-anteojos-te-damos-los-mejores-consejos');
    }
    public function Tecnologia()
    {
        return view('blog.te-presentamos-los-ultimos-desarrollos-en-tecnologia-para-lentes-y-anteojos');
    }
}
