@extends('layouts.app')
@section('title','Consulta Oftalmológica Integral, Oftalmo Vissum')
@section('url','httpss://www.oftalmovissum.pe/servicios/oftalmologica-integral')
@section('image','https://www.oftalmovissum.pe/img/servicios/consulta-oftalmologica-integral/oftalmologica-integral.jpg')
@section('description','La consulta oftalmológica integral sirve para conocer el estado visual de los pacientes e indicarles el mejor tratamiento a seguir.')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">

                            <h1><strong>Consulta Oftalmológica Integral</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span><a href="/servicios">Servicios</a>
                            <span class="sep">/ Oftalmológica Integral</span>

                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Main Content -->
    <div>
        <div class="container">
            <div class="row">

                <div >

                    <div class="gallery-img col-md-8 col-sm-6 col-xs-12 pad-t40">

                        <div class="roll-slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    {{--<li>--}}
                                        {{--<img src="/img/servicios/consulta-oftalmologica-integral/consulta4.jpg" alt="Oftalmologica Integral " title="Oftalmologica Integral ">--}}
                                    {{--</li>--}}
                                    <li>
                                        <img src="/img/servicios/consulta-oftalmologica-integral/consulta1.jpg" alt="Oftalmologica Integral " title="Oftalmologica Integral ">

                                    </li>
                                    <li>
                                        <img src="/img/servicios/consulta-oftalmologica-integral/consulta2.jpg" alt="Oftalmologica Integral " title="Oftalmologica Integral ">
                                    </li>
                                    <li>
                                        <img src="/img/servicios/consulta-oftalmologica-integral/consulta3.jpg" alt="Oftalmologica Integral " title="Oftalmologica Integral ">
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3>Consulta</h3>
                        <p>Una consulta oftalmológica Integral, no es solo una medida de vista. Esta debe incluir una revisión de todas las estructuras del ojo, es por eso, que realizamos una revisión completa, que examina las partes internas y externas del ojo y sobre todo el estado anatómico y funcional, anexos y estructuras relacionadas, las patologías del globo ocular, la musculatura ocular, sistema lagrimal, párpados y sus tratamientos.</p>
                        <h3>Procedimiento</h3>
                        <p>Luego de pasar la consulta con el Optómetra, ingresa a su consulta Oftalmológica, donde revisarán los siguientes pasos:</p>
                            <ul>
                            <li>Análisis y evaluación de Resultados.</li>

                            <li>Antecedentes del paciente.</li>

                            <li>Evaluación con la Lámpara de Hendidura.</li>

                            <li>Orden de Exámenes Auxiliares y/o Exámenes Adicionales.</li>

                            <li>Diagnóstico Profundo.</li>
                        </ul>

                        <h3>Evaluación</h3>
                        <p>Cada paciente que ingresa a nuestra institución se le apertura una historia y se le indica los procesos y procedimientos a seguir, luego ingresa a consulta con el Optómetra para su respectivas evaluaciones y finalmente pasa con el médico oftalmológo para la lectura, análisis y diagnostico de sus resultados.</p>



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
