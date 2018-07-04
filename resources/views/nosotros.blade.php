@extends('layouts.app')

@section('title', 'Sobre Oftalmo Vissum , Clinica de Oftamologia PERÚ')
@section('url','https://www.oftalmovissum.pe/nosotros')
@section('image', 'https://www.oftalmovissum.pe/nosotros/img/sobre-oftamologia.jpg')
@section('description', 'Somos la clínica oftalmológica líder en el cuidado de sus ojos, con tecnología de última generación para el diagnóstico y tratamiento de enfermedades oculares.')


@section('content')
    <!-- Page Title -->
    <div class="page-title">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Sobre Nosotros</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/" title="Ir a la página de inicio">Inicio</a><span class="sep">/</span>
                           Nosotros
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
    <!-- About Content -->
    <section class="roll-section about-page-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pad-b30">
                    <img src="/img/nosotros/nosotros-principal.jpg" alt="Sala Mayor Oftalmo vissum" title="Sala Mayor Oftalmo vissum">
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 pad-t30">
                    <div class="roll-spacer h10 hide-on-desktop"></div>
                    <div class="roll-spacer h20"></div>
                    <h2 class="w300">Oftalmo visssum, <strong>Clínica Oftalmológica</strong></h2>
                    <p class="font16">Somos la clínica oftalmológica líder en el cuidado de sus ojos, con tecnología de última generación para el diagnóstico y tratamiento de enfermedades oculares.
                        Contamos con un equipo de profesionales especializados en el Perú y en el extranjero.
                       </p>

                    <div class="roll-spacer h20"></div>
                    <blockquote class="style2"> Oftalmo Vissum; además de sus modernas instalaciones para la consulta oftalmológica cuenta con servicios de óptica y quirófanos en ambientes idóneos y seguros.</blockquote>

                    <div class="roll-spacer h30"></div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-page-2 -->

    <!-- Textbox -->
    <section class="roll-section about-textbox">
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-3">
                    <div class="roll-textbox">
                        <h3><strong>Valores</strong></h3>
                        <ul>
                            <li>Honestidad</li>
                            <li>Integridad</li>
                            <li>Ética</li>
                            <li>Responsabilidad</li>
                        </ul>
                        {{--<a href="#" class="roll-button size-1">Leer más</a>--}}
                    </div><!-- /.roll-textbox -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="roll-textbox style2">
                        <h3><strong>Principios</strong></h3>
                        <ul>
                            <li>Desarrollo y bienestar del recurso humano</li>
                            <li> Compromiso en el servicio</li>
                            <li>Cultura de calidad</li>
                            <li>Responsabilidad Social con la comunidad</li>
                        </ul>
                        {{--<a href="#" class="roll-button size-1">Leer más</a>--}}
                    </div><!-- /.roll-textbox -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="roll-textbox style3">
                        <h3><strong>Misión</strong></h3>
                        <p>Brindar atenciones médicas especializadas en Oftalmología, destacándose por la personalización de sus servicios, tecnología de última generación y el compromiso de nuestro personal con el cuidado integral de su salud ocular.</p>
                        {{--<a href="#" class="roll-button size-1">Leer más</a>--}}
                    </div><!-- /.roll-textbox -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="roll-textbox style4">
                        <h3><strong>Visión</strong></h3>
                        <p> Ser la institución líder en salud ocular y centro de referencia a nivel nacional e internacional, ofreciendo la mejor atención al paciente así como nuestros servicios en prevención, diagnóstico, tratamiento e investigación de enfermedades oculares</p>
                        {{--<a href="#" class="roll-button size-1">Leer más</a>--}}
                    </div><!-- /.roll-textbox -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.textbox -->

    <!-- Piechart -->
    <section  id="logonosotros" class="roll-section piecharts2 parallax" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="roll-piechart style2">
                        <div data-value="80" class="piechart"><div class="inner-circle"></div>
                        </div>
                        <h5>
                            Clientes satisfechos</h5>
                    </div>
                    <div class="roll-spacer h45 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="roll-piechart style2">
                        <div data-value="85" class="piechart"><div class="inner-circle"></div>
                        </div>
                        <h5>
                            Tratamientos hechos</h5>
                    </div>
                    <div class="roll-spacer h45 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="roll-piechart style2">
                        <div data-value="90" class="piechart"><div class="inner-circle"></div>
                        </div>
                        <h5>
                            Pacientes curados</h5>
                    </div>
                    <div class="roll-spacer h45 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="roll-piechart style2">
                        <div data-value="98" class="piechart"><div class="inner-circle"></div>
                        </div>
                        <h5>
                            Recetas descargadas</h5>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection

@section('scripts-before-main')
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
@endsection
