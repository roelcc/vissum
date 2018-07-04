@extends('layouts.app')
@section('title','Servicios de Consulta de Optometría, Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/servicios/consulta-optometria')
@section('image','https://www.oftalmovissum.pe/servicios/consulta-optometria/img/servicios/consulta-optometria/consulta-optometria.jpg')
@section('description','Consulta de Optometría realizan un análisis integral de sus ojos, obteniendo la mayor información del paciente y brindarle un diagnóstico personalizado. ')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Consulta de Optometría</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/" title="Ir a la página de la Home">Inicio</a><span class="sep">/</span><a href="/servicios" title="Ir a la página de Servicios">Servicios</a>
                            <span class="sep">/ Consulta de Optometría</span>

                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Main Content -->
    <div class="">
        <div class="container">
            <div class="row">

                <div class="">

                    <div class="gallery-img col-md-8 col-sm-6 col-xs-12 pad-t40 ">

                        <div class="roll-slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="/img/servicios/consulta-optometria/optometria1.jpg" alt="Consulta Optometría" title="Consulta Optometría">
                                    </li>
                                    <li>
                                        <img src="/img/servicios/consulta-optometria/optometria2.jpg" alt="Consulta Optometría" title="Consulta Optometría">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3>Consulta</h3>
                        <p>Consulta de Optometría realizan un análisis integral de sus ojos y estilo de vida, obteniendo la mayor información del paciente y de esta forma poder brindarle un diagnóstico personalizado con un asesoramiento técnico e ideal para el uso de los mejores lentes y monturas.</p>

                        <p>Incluye las siguientes evaluaciones:</p>
                        <ul>
                            <li>Auto refracción computarizada.</li>
                            <li>Queratometría Periférica.</li>
                            <li>Agudeza Visual.</li>
                            <li>Lensometría.</li>
                            <li>Prueba de Ishihara.</li>
                            <li>Prueba Bicromática.</li>
                            <li>Biomicroscopía ocular.</li>
                            <li>Motilidad ocular.</li>
                            <li>Tonometría.</li>
                            <li>Exploración de reflejos pupilares.</li>
                            <li>Medida de Vista Computarizada.</li>
                        </ul>

                        <h3>Procedimiento</h3>
                        <p>Cada paciente que ingresa a nuestra institución se le apertura una historia y se le indica los procesos y procedimientos a seguir, luego ingresa a consulta con el Optómetra para su respectivas evaluaciones y finalmente pasa con el médico oftalmológo para la lectura, análisis y diagnóstico de sus resultados.</p>

                    </div><!-- /.gallery-img -->
                    <div class="gallery-desc col-md-4 col-sm-6 col-xs-12 pad-t40 ">

                        <hr>
                        <div class="">
                            <h2>En Oftalmo Vissum </h2>
                            <p>Aseguramos garantía y veracidad en sus resultados, ya que contamos con un staff médico altamente capacitado en el Perú y en el extranjero, brindamos calidad y compromiso en la atención personalizada de cada paciente así como resultados óptimos gracias a nuestra tecnología de última generación.</p>
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
