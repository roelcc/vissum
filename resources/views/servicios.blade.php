@extends('layouts.app')

@section('title','Servicios de Oftamologia | Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/nosotros')
@section('image','https://www.oftalmovissum.pe/servicios/img/servicios-oftamologia.jpg')
@section('description','Oftalmo Vissum ofrece los servicios de Consulta Oftalmológica Integral, Consulta de Optometría, exámenes auxiliares, exámenes adicionales, cirugías, óptica.')
@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Nuestro Servicios</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span>
                            Servicios
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Services -->
    <div class="roll-section">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/consulta-integral.png" alt="Consulta Oftalmológica Integral Oftalmo Visssum" title="Consulta Oftalmológica Integral Oftalmo Visssum">
                        </div>
                        <h3><a href="/servicios/oftalmologica-integral" title="Oftalmológica Integral en Oftalmo Vissum">Consulta Oftalmológica Integral</a></h3>
                        <p>Consulta oftalmológica integral sirve para conocer el estado visual de los pacientes e indicarles el mejor tratamiento a seguir.</p>
                    </div><!-- /.roll-iconbox -->
                    <div class="roll-spacer h35"></div>
                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/consulta-optometria.png" alt="Consulta Optometría Oftalmo Vissum" title="Consulta Optometría Oftalmo Vissum">
                        </div>
                        <h3><a href="/servicios/consulta-optometria" title="Consulta de Optometría en Oftalmo Vissum">Consulta de Optometría</a></h3>
                        <p>Se realizará un análisis integral de sus ojos, obteniendo la mayor información posible para poder brindarle un diagnostico personalizado.</p>
                    </div><!-- /.roll-iconbox -->
                    <div class="roll-spacer h35 hide-on-desktop"></div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/examenes-auxiliares.png" alt="Examenes Auxiliares Oftalmo Vissum" title="Examenes Auxiliares Oftalmo Vissum">
                        </div>
                        <h3><a href="/servicios/examenes-auxiliares" title="Exámenes Auxiliares en Oftalmo Visssum">Exámenes Auxiliares</a></h3>
                        <br>
                        <p>Los exámenes auxiliares son un conjunto de estudios muy importantes que aportan una valiosa información para el análisis médico</p>
                    </div><!-- /.roll-iconbox -->
                    <div class="roll-spacer h35"></div>
                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/examenes-adicionales.png" alt="Examenes Adicionale Oftalmo Vissum" title="Examenes Adicionale Oftalmo Vissum">
                        </div>
                        <h3><a href="/servicios/examenes-adicionales" title="Exámenes Adicionales en Oftalmo Vissum">Exámenes Adicionales</a></h3>
                        <p>Después de la consulta oftalmológica integral y de acuerdo con los resultados, se inicia la orden de evaluaciones para el diagnóstico final.</p>
                    </div><!-- /.roll-iconbox -->
                    <div class="roll-spacer h35 hide-on-desktop"></div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/cirugias.png" alt="Cirugias en Oftalmo Vissum" title="Cirugias en Oftalmo Vissum">
                        </div>
                        <h3><a href="/servicios/cirugias" title="Cirugías en Oftalmo Vissum">Cirugías</a></h3>
                        <br>
                        <p>Facoemulsificación de Catarata Implante de Anillos Intraestromales Implante de Lente Intraocular Artisan Implante Valvular en Glaucoma.</p>
                    </div><!-- /.roll-iconbox -->
                    <div class="roll-spacer h35">
                    </div>

                    <div class="roll-iconbox clearfix">
                        <div class="icons image">
                            <img src="/iconos/optica.png" alt="Servicios Oftalmológico" title="Servicios Oftalmológico" >
                        </div>
                        <h3><a href="/servicios/optica" title="Óptica en Oftalmo Visssum" >Óptica</a></h3>
                        <p>Ofrecemos todo tipo de lentes para cada perfil de rostro ofreciendo la mayor nitidez de visión para todas las distancias.</p>
                    </div><!-- /.roll-iconbox -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>






@endsection