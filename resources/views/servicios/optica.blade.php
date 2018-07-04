@extends('layouts.app')
@section('title','Servicio de Optica, Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/servicios/optica')
@section('image','https://www.oftalmovissum.pe/servicios/optica/img/servicios/optica/servicios-optica.jpg')
@section('description','Nuestra óptica ofrece productos de calidad, lentes ideales para todo tipo de usuario, todo lo que sus ojos necesitan para lograr la máxima nitidez de visión')

@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Óptica</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span><a href="/servicios">Servicios</a>
                            <span class="sep">/ Optica</span>

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

                    <div class="gallery-img col-md-8 col-sm-6 col-xs-12 pad-t40">

                        <div class="roll-slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="/img/servicios/optica/optica.jpg" alt="Optica Oftalmo vissum" title="Optica Oftalmo vissum">
                                    </li>
                                    <li>
                                        <img src="/img/servicios/optica/optica1.jpg" alt="Optica Oftalmo vissum" title="Optica Oftalmo vissum">
                                    </li>



                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3>Productos</h3>
                        <p>Nuestra óptica le  ofrece productos de calidad, lentes ideales para todo tipo de usuario así como todo lo que sus ojos necesitan para lograr la máxima nitidez de visión para lejos, distancia intermedia y cerca. Ofrecemos también garantía por 1 año por cada montura adquirida, asesoría técnica y mantenimiento gratuito.</p>
                        <h3>Marcas</h3>
                        <p>Contamos con un amplio stock de monturas de marcas nacionales, reconocidas y de moda europea, así como:</p>
                        <ul>
                            <li>Cristales y Resinas.</li>
                            <li>Antireflex.</li>

                            <li>Transition y policarbonato.</li>

                            <li>Lentes de contacto blandos, gas permeable, bifocales, multifocales, tóricos, y cosméticos.</li>

                            <li>Lentes esclerales.</li>

                            <li>Lentes de contacto especiales para Queratocono.</li>
                        </ul>




                    </div><!-- /.gallery-img -->
                    <div class="gallery-desc col-md-4 col-sm-6 col-xs-12 pad-t40">

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