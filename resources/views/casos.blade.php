@extends('layouts.app')
@section('title','Proyectos Oftalmo Vissum, consulta, examenes ,cirugias , oprtica')
@section('url','https://www.oftalmovissum.pe/casos')
@section('image','https://www.oftalmovissum.pe/img/proyecto/operacion-redes.jpg')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Nuestros Casos Clínicos</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/ casos</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Main Content -->
    <div class="main-content has-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-9 col-lg-offset-2 pad-b30">

                        <p class="font16">Aquí una recopilación de casos de Oftalmo Vissum en el campo oftalmológico en Lima, Perú. Casos que nos demuestran la experiencia y profesionalidad de los médicos con sus pacientes en todos los años de trabajo.</p>
                    </div>

                    <div class="roll-gallery">
                        <div id="gallery-v1-filter">
                            <div data-filter="*" class="cbp-filter-item">
                                Todos
                            </div>
                            {{--data-filter=".integral"--}}
                            <div class="cbp-filter-item">
                                Consulta Oftalmológica Integral
                            </div>
                            {{--data-filter=".optometria"--}}
                            <div class="cbp-filter-item">
                                Consulta de Optometría
                            </div>
                            {{--data-filter=".auxiliares"--}}
                            <div class="cbp-filter-item">
                                Exámenes Auxiliares
                            </div>
                            {{--data-filter=".adicionales"--}}
                            <div  class="cbp-filter-item">
                                Exámenes Adicionales
                            </div>
                            {{--data-filter=".cirugias"--}}
                            <div  class="cbp-filter-item">
                                Cirugías
                            </div>
                            {{--data-filter=".optica"--}}
                            <div  class="cbp-filter-item">
                                Óptica
                            </div>
                        </div>

                        <div id="gallery-v1" class="galleries cbp" data-item="4" data-layout="grid" data-gaph="1" data-gapv="1">
                            <div class="  cbp-item integral optometria gallery-item">
                                <div class="cbp-caption">
                                    <div class="gallery-item-wrap">
                                        <a href="/casos/testimonio-01"><img src="/img/proyecto/miopia.jpg" alt="Caso Miopia Oftalmo Vissum" title="Caso Miopia Oftalmo Vissum"></a>
                                        <div class=" gallery-lightbox">
                                            <h4 class="gallery-title"><a href="/casos/testimonio-01">Miopía</a></h4>
                                            {{--<a class="cbp-lightbox" href="/casos/testimonio-01" data-title="proyecto pendiente">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.cbp-item -->
                            <div class="  cbp-item auxiliares adicionales gallery-item">
                                <div class="cbp-caption">
                                    <div class="gallery-item-wrap">
                                        <a href="/casos/testimonio-02"><img src="/img/proyecto/asigmatismo.jpg" alt="Caso Asigmatismo Oftalmo Vissum" title="Caso Asigmatismo Oftalmo Vissum"></a>
                                        <div class="  gallery-lightbox">
                                            <h4 class="gallery-title"><a href="/casos/testimonio-02">Asigmatismo</a></h4>
                                            {{--<a class="cbp-lightbox" href="/casos/testimonio-02" data-title="proyecto pendiente">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.cbp-item -->
                            <div class="  cbp-item cirugias gallery-item">
                                <div class="  cbp-caption">
                                    <div class="  gallery-item-wrap">
                                        <a href="/casos/testimonio-03"><img src="/img/proyecto/operacion.jpg" alt="Casos clinicos operacion Oftalmo Vissum" title=""></a>
                                        <div class=" gallery-lightbox">
                                            <h4 class="  gallery-title"><a href="/casos/testimonio-03">Operación</a></h4>
                                            {{--<a class=" cbp-lightbox" href="/casos/testimonio-03" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.cbp-item -->
                            {{--<div class="cbp-item cirugias optica optometria gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item cirugias  optometria gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item optica gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item integral auxiliares gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item optometria optica gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item cirugia gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item optica gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item auxiliar gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                            {{--<div class="cbp-item auxiliar gallery-item">--}}
                                {{--<div class="cbp-caption">--}}
                                    {{--<div class="gallery-item-wrap">--}}
                                        {{--<img src="/img/proyecto/imgrota.jpg" alt="image">--}}
                                        {{--<div class="gallery-lightbox">--}}
                                            {{--<h4 class="gallery-title"><a href="#">Casos Pendiente</a></h4>--}}
                                            {{--<a class="cbp-lightbox" href="#" data-title="Hallery">--}}
                                                {{--<i class="fa fa-search"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.cbp-item -->--}}
                        </div><!-- /#portfolio-v1 -->

                        {{--<div class="gallery-button">--}}
                            {{--<a class="roll-button" href="/./inc/ajax/g2" data-page="3">ver mas</a>--}}
                        {{--</div>--}}
                    </div><!-- /.roll-gallery -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-content -->

@endsection