@extends('layouts.app')
@section('title','Servicio de Cirugías, Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/servicios/cirugias')
@section('image','https://www.oftalmovissum.pe/servicios/cirugias/img/servicios/servicio-cirugia.jpg')
@section('description','Dedicados a la Oftalmología, Chalazion Simple y Múltiple, Pterigion Simple y Recidivado, Facoemulsificación de Catarata, Faco+Trabeculectomia.')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Cirugias</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span>
                            <a href="/servicios">Servicios</a>
                            <span class="sep">/ Cirugías</span>

                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Main Content -->
    <div class=" ">
        <div class="container">
            <div class="row">

                <div class=" ">

                    <div class="gallery-img col-md-8 col-sm-6 col-xs-12 pad-t40">

                        <div class="roll-slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="/img/servicios/cirugias/cirugias1.jpg" alt="Cirugías Oftalmo Visssum" title="Cirugías Oftalmo Visssum">
                                    </li>
                                    <li>
                                        <img src="/img/servicios/cirugias/cirugias2.jpg" alt="Cirugías Oftalmo Visssum" title="Cirugías Oftalmo Visssum">
                                    </li>
                                    {{--<li>--}}
                                        {{--<img src="/img/servicios/cirugias/cirugias3.jpg" alt="Cirugías Oftalmo Visssum" title="Cirugías Oftalmo Visssum">--}}
                                    {{--</li>--}}

                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3>Técnicas</h3>
                        <ul>
                            <li> Chalazion Simple y Múltiple.</li>
                            <li>Pterigion Simple y Recidivado.</li>
                            <li>Facoemulsificación de Catarata.</li>
                            <li>Faco+Trabeculectomia.</li>
                            <li>Faco+Implante Valvular.</li>
                            <li>MiniNuc de Catarata.</li>
                            <li>Excimer Laser (Lasik, PRK).</li>
                            {{--<li>Transplante de Córnea.</li>--}}
                            <li>Implante de Anillos Intraestromales.</li>
                            <li>Implante de Lente Intraocular Artisan.</li>
                            <li>Implante Valvular en Glaucoma.</li>
                            <li>Dacriocistorrinostomía.</li>
                            <li> Estrabismo.</li>
                            <li>Trabeculectomia.</li>
                            <li> Vitreoretinal.</li>
                        </ul>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sagittis odio, vitae finibus diam tincidunt eget. Nullam sit amet nunc felis. Sed lorem est, vestibulum nec enim non, fringilla malesuada urna.</p>--}}
                        {{--<h3>Procedimiento</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sagittis odio, vitae finibus diam tincidunt eget. Nullam sit amet nunc felis. Sed lorem est, vestibulum nec enim non, fringilla malesuada urna.</p>--}}
                        {{--<h3>Consecuencias</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sagittis odio, vitae finibus diam tincidunt eget. Nullam sit amet nunc felis. Sed lorem est, vestibulum nec enim non, fringilla malesuada urna.</p>--}}
                        {{--Caracteristicas--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sagittis odio, vitae finibus diam tincidunt eget. Nullam sit amet nunc felis. Sed lorem est, vestibulum nec enim non, fringilla malesuada urna.</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sagittis odio, vitae finibus diam tincidunt eget. Nullam sit amet nunc felis. Sed lorem est, vestibulum nec enim non, fringilla malesuada urna.</p>--}}
                    </div><!-- /.gallery-img -->
                    <div class="gallery-desc col-md-4 col-sm-6 col-xs-12 pad-t40">

                        <hr>
                        <div class="">
                            <h2>En Oftalmo Vissum </h2>
                            <p>Aseguramos garantía y veracidad en sus resultados,
                                ya que contamos con un staff médico altamente capacitado en el Perú y en el extranjero,
                                brindamos calidad y compromiso en la atención personalizada de cada paciente así como resultados óptimos gracias a
                                nuestra tecnología de última generación.</p>

                        </div>
                        <hr>


                        @include('includes.menu-nav-service')
                        <div class="socials">
                            <ul>
                                <li><a href="https://www.fb.com/oftalmovissum" title="Oftalmo Visssum en facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/oftalmovissum" title="Oftalmo Visssum en twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/b/106812060405674254785/106812060405674254785" title="Oftalmo Visssum en google+"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/25021126/" title="Oftalmo Visssum en linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- /.gallery-desc -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-content -->
@endsection
@section('scripts-before-main')
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
@endsection