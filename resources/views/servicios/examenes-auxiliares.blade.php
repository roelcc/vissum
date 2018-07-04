@extends('layouts.app')
@section('title','Servicios de Examenes Auxiliares, Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/servicios/examenes-auxiliares')
@section('image','https://www.oftalmovissum.pe/servicios/examenes-auxiliares/img/servicios/examenes-auxiliares/examenes-auxiliares.jpg')
@section('description','Una consulta oftalmológica Integral, no es solo una medida de vista. Esta debe incluir una revisión de todas las estructuras del ojo.')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Examenes Auxiliares</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span><a href="/servicios">Servicios</a>
                            <span class="sep">/ Examenes auxiliares</span>

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
                                        <img src="/img/servicios/examenes-auxiliares/auxiliares1.jpg" alt="Examenes Auxiliares Oftalmo Visssum" title="Examenes Auxiliares Oftalmo Visssum">
                                    </li>
                                    <li>
                                        <img src="/img/servicios/examenes-auxiliares/auxiliares2.jpg" alt="Examenes Auxiliares Oftalmo Visssum" title="Examenes Auxiliares Oftalmo Visssum">
                                    </li>
                                    {{--<li>--}}
                                        {{--<img src="/img/servicios/examenes-auxiliares/auxiliares3.jpg" alt="Examenes Auxiliares Oftalmo Visssum" title="Examenes Auxiliares Oftalmo Visssum">--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3>Exámenes</h3>
                        <p>Los exámenes auxiliares son un conjunto de estudios muy importantes que aportan una valiosa información para el análisis médico, ya sea para confirmar o dar mayor certeza al diagnóstico de alguna patología en cuestión. El oftalmólogo es quien da la orden para realizar los exámenes necesarios de acuerdo a la necesidad de cada paciente.</p>
                        EXÁMENES AUXILIARES
                        <ul>
                            <li>Paquimetría Corneal.</li>

                            <li>Campo Visual – Campimetría.</li>

                            <li>Topografía Pentacam.</li>

                            <li>Microscopia Especular.</li>

                            <li>Ecobiometria y Calculo de Lente Intraocular.</li>

                            <li>Ecografía Ocular.</li>

                            <li>Angiografía.</li>

                            <li>OCT (Tomografía de Coherencia Óptica)</li>

                            <li>UBM (Ultrabiomicroscopía de Segmento Anterior)</li>
                        </ul>

                    </div><!-- /.gallery-img -->
                    <div class="gallery-desc col-md-4 col-sm-6 col-xs-12 pad-t40">

                        <hr>
                        <h2>En Oftalmo Vissum </h2>
                        <p>Aseguramos garantía y veracidad en sus resultados, ya que contamos con un staff médico altamente capacitado en el Perú y en el extranjero, brindamos calidad y compromiso en la atención personalizada de cada paciente así como resultados óptimos gracias a nuestra tecnología de última generación.</p>
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