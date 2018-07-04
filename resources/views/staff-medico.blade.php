@extends('layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Staff Medico</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/" title="Ir a la página de inicio">Inicio</a><span class="sep">/</span>
                            staff medico
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->



    <!-- About Content -->
    <div class="roll-section about-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="roll-titlebox text-center titul-col">
                        {{--<div class="font-h25"><img src="/img/icons/vision.jpg" alt="Sobre Oftalmo Vissum" title="Sobre Oftalmo Vissum"></div>--}}
                        <div class="font-h20"><h2 > <strong>Nuestro Equipo de Profesionales</strong></h2></div>

                    </div>
                    <div >
                        <p class="font16">La clínica Oftalmo Vissum se caracteriza por tener diversas especialidades para el cuidado de su salud ocular con un staff médico altamente calificado, pero nuestra principal especialidad es de CORNEA, CATARATA Y CIRUGÍA REFRACTIVA dirigida por nuestro Director Médico y Fundador; el Dr. Robert Muñoz Cruz.</p>
                    </div>


                    <div class="roll-titlebox text-center">
                    </div>
                    <div class="roll-spacer h70"></div>
                    <div class="roll-slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="/img/nosotros/sobre-oftalmologia1.jpg" alt="Sobre Oftalmo Vissum" title="Sobre Oftalmo Vissum">
                                </li>
                                <li>
                                    <img src="/img/nosotros/ver-bien.jpg" alt="Sobre Oftalmo Vissum" title="Sobre Oftalmo Vissum">

                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="roll-spacer h45"></div>
                </div><!-- /.col-md-12 -->

                {{--<div class="col-md-6 ">--}}
                    {{--<h2 class="titul-col">--}}
                        {{--<img src="/img/icons/maquina.jpg" alt="Misión Oftalmo Vissum" title="Misión Oftalmo Vissum"> <strong>MISIÓN</strong></h2>--}}
                    {{--<p> Brindar atenciones médicas especializadas en Oftalmología, destacándose por la personalización de sus servicios, tecnología de última generación y el compromiso de nuestro personal con el cuidado integral de su salud ocular.</p>--}}
                {{--</div><!-- /.col-md-6 -->--}}
                {{--<div class="col-md-6">--}}
                    {{--<h2 class="titul-col">--}}
                        {{--<img src="/img/icons/estrella.jpg" alt="Visión Oftalmo vissum" title="Visión Oftalmo vissum"><strong>VISIÓN</strong></h2>--}}
                    {{--<p>Ser la institución líder en salud ocular y centro de referencia a nivel nacional e internacional, ofreciendo la mejor atención al paciente así como nuestros servicios en prevención, diagnóstico, tratamiento e investigación de enfermedades oculares</p>--}}
                {{--</div><!-- /.col-md-6 -->--}}

                <div class="roll-spacer h70"></div>


                <div class="col-md-12 col-sm-6">
                    <div class="col-md-6 pad-b30 pad-t30">
                        <div class="roll-doctor">
                            <div class="thumb">
                                <div class="doctor">
                                    <img src="/img/nosotros/exper4.jpg" alt="expertos en Oftalmo Vissum" title="expertos en Oftalmo Vissum">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 pad-t80">
                        <h3 class="name font-dr "><b>Dr. Robert Muñoz Cruz</b></h3>
                        <div class="position pad-b10">(CMP 30270 RNE 20080)</div>
                        <p class="font20">Director Médico y Cirujano Oftalmólogo con Sub especialidad en Cornea, Catarata y
                            Cirugía Refractiva y Director Médico</p>
                        <ul>
                            <li>Miembro Titular de la Sociedad Peruana de Oftalmología.</li>
                            <li>Miembro de la Academia Americana de Oftalmología.</li>
                            <li>Miembro de la Sociedad Americana de Cirugía de Catarata y Cirugía Refractiva.</li>
                            <li>Miembro de la Sociedad Internacional  de Cirugía Refractiva.</li>
                            <li>Miembro de Cornea Society.</li>
                            <li>Miembro de la Asociación Panamericana de Banco de Ojos.</li>
                            <li>Miembro de la Asociación Latinoamericana de Cirujanos de Córnea, Catarata y Segmento Anterior</li>
                            <li>Miembro de World Keratoconus Society</li>
                        </ul>
                    </div>

                    <div class="roll-spacer h35 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6">
                    <div class="roll-doctor">
                        <div class="thumb">
                            <div class="doctor">
                                <img src="/img/nosotros/exper2.jpg" alt="expertos en Oftalmo Vissum" title="expertos en Oftalmo Vissum">
                            </div>
                            {{--<div class="socials">--}}
                            {{--<div class="inner">--}}
                            {{--<ul>--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <h3 class="name"><a href="#">Dra. Lyda Vargas Loysa</a></h3>
                        <div class="position">(CMP 34433 RNE 2082)</div>
                        <p>Cirujano Oftalmólogo</p>
                    </div>
                    <div class="roll-spacer h35 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="roll-doctor">
                        <div class="thumb">
                            <div class="doctor">
                                <img src="/img/nosotros/exper3.jpg" alt="expertos en Oftalmo Vissum" title="expertos en Oftalmo Vissum">
                            </div>
                            {{--<div class="socials">--}}
                            {{--<div class="inner">--}}
                            {{--<ul>--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <h3 class="name"><a href="#">Dra. Yesenia Llerena Loyola</a></h3>
                        <div class="position">(CMP 36442 RNE 31400)</div>
                        <p>Cirujano Oftalmólogo</p>
                    </div>
                    <div class="roll-spacer h35 hide-on-desktop"></div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="roll-doctor">
                        <div class="thumb">
                            <div class="doctor">
                                <img src="/img/nosotros/exper1.jpg" alt="expertos en Oftalmo Vissum" title="expertos en Oftalmo Vissum">
                            </div>
                            {{--<div class="socials">--}}
                            {{--<div class="inner">--}}
                            {{--<ul>--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <h3 class="name"><a href="#">Dr. Hugo Aramburu Castro</a></h3>
                        <div class="position">(CMP 35465 RNE 29302)</div>
                        <p>Cirujano Oftalmólogo</p>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="roll-spacer h70 "></div>
                </div>

                <div class="roll-spacer h35 hide-on-desktop"></div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.about-page -->

@endsection
@section('scripts-before-main')
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
@endsection