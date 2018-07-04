@extends('layouts.app')
@section('title','Artículos, Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/blog')
@section('image','https://www.oftalmovissum.pe/img/blog/blog-salud.jpg')
@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Artículos </strong></h1>
                            <div class="face-share ">
                                <a href="https://facebook.com/sharer.php?u={{ url()->current() }}" target="new"
                                   title="Oftalmo Vissum en Facebook"><i class="fa fa-facebook faceshare"></i></a>
                                <a href="https://twitter.com/share" target="new"><i class="fa fa-twitter twittershare"
                                                                                    title="Oftalmo Vissum en Twitter"></i></a>
                                <a href="https://plus.google.com/share?url={{ url()->current() }}" target="new"
                                   title="Oftalmo Vissum en Google plus"><i
                                            class="fa fa-google-plus googleshare"></i></a>
                                <a href="http://www.linkedin.com/shareArticle?url={{ url()->current() }}" target="new"
                                   title="Oftalmo Vissum en Linkedin"><i class="fa fa-linkedin linkedinshare"></i></a>
                                <a href="http://pinterest.com/pin/create/bookmarklet/?url={{ url()->current() }}"
                                   target="new" title="Oftalmo Vissum en Pinterest"><i
                                            class="fa fa-pinterest-p pinterestshare"></i></a>
                                <a href="https://www.instagram.com/" title="Oftalmo Vissum en Instagram"><i
                                            class="fa fa-instagram instagramshare"></i></a>
                                <div class="fb-like" data-href="https://www.facebook.com/oftalmovissum/"
                                     data-layout="button" data-action="like" data-size="small" data-show-faces="false"
                                     data-share="false"></div>
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/ artículos</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
    <div class="container padtba">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="gallery-title">Consejos para tu salud ocular</h2>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo" title="Consejos para su salud ocular">
                        <img src="/img/blog/ico-salud-ocular.jpg" class="img-responsive image" title="Consejos para su salud ocular" alt="Consejos para su salud ocular"></a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo" title="Consejos para su salud ocular">Consejos para su salud ocular</a></div>
                    </div>
                    {{--<div class="movil-descrip">--}}
                        {{--<h3><a href="" title="Salud Ocular">Salud Ocular</a></h3>--}}
                        {{--<p>Sin duda actualmente vivimos un mundo en el que todos los mensajes a nuestro alrededor requieren de la vista para ser interpretados.</p>--}}
                        {{--<a href="/blog/10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo" title="Salud Ocular"><i>Leer más</i></a>--}}

                    {{--</div>--}}
                </div>

            </div>
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/porque-tengo-los-ojos-llorosos-aqui-las-principales-razones" title="¿Por que tengo los ojos llorosos? ">
                        <img src="/img/blog/ico-ojos-llorosos-m.jpg" class="img-responsive image" title="¿Por que tengo los ojos llorosos?" alt="¿Por que tengo los ojos llorosos?"></a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/porque-tengo-los-ojos-llorosos-aqui-las-principales-razones" title="¿Por que tengo los ojos llorosos? ">¿Por que tengo los ojos llorosos? </a></div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/colirio-gotas-para-los-ojos-cuales-son-adecuados-para-mi" title="Gotas para los Ojos cuales son adecuados para mi">
                        <img src="/img/blog/ico-gotas-para-los-ojos.png" class="img-responsive image" title="Gotas para los Ojos cuales son adecuados para mi" alt="Gotas para los Ojos cuales son adecuados para mi">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/colirio-gotas-para-los-ojos-cuales-son-adecuados-para-mi" title="Gotas para los Ojos cuales son adecuados para mi">Gotas para los Ojos cuales son adecuados para mi</a></div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/cirugia-ocular-para-mejorar-tu-vista-como-saber-si-es-indicada-para-mi" title="Cirugía Ocular para Mejorar tu Vista">
                        <img src="/img/blog/ico-cirugia-laser.jpg" class="img-responsive image" title="Cirugía Ocular para Mejorar tu Vista" alt="Cirugía Ocular para Mejorar tu Vista">
                    </a>
                    <div class="overlay">
                        <div class="text">
                            <a href="/blog/cirugia-ocular-para-mejorar-tu-vista-como-saber-si-es-indicada-para-mi" title="Cirugía Ocular para Mejorar tu Vista">Cirugía Ocular para Mejorar tu Vista</a></div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/enfermedades-oculares-que-vienen-con-la-edad" title="Enfermedades Oculares que vienen con Edad">

                        <img src="/img/blog/ico-enfermedades-oculares-en-la-edad.jpg" class="img-responsive image" title="Enfermedades Oculares que vienen con Edad" alt="Enfermedades Oculares que vienen con Edad">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/enfermedades-oculares-que-vienen-con-la-edad" title="Enfermedades Oculares que vienen con Edad">Enfermedades Oculares que vienen con Edad</a></div>
                    </div>
                </div>


            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/que-es-la-conjuntivitis-y-como-podemos-prevenirla-10-consejos" title="Como Prevenir la Conjuntivitis">
                        <img src="/img/blog/ico-conjuntivitis.jpg" class="img-responsive image" title="Como Prevenir la Conjuntivitis" alt="Como Prevenir la Conjuntivitis">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/que-es-la-conjuntivitis-y-como-podemos-prevenirla-10-consejos" title="Como Prevenir la Conjuntivitis">Como Prevenir la Conjuntivitis</a></div>
                    </div>
                </div>



            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/lentes-de-contacto-tipos-y-cuales-me-convienen" title="Tipos de Lentes de Contacto">
                        <img src="/img/blog/ico-lentes-de-contacto.jpg" class="img-responsive image" title="Tipos de Lentes de Contacto" alt="Tipos de Lentes de Contacto">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/lentes-de-contacto-tipos-y-cuales-me-convienen" title="Tipos de Lentes de Contacto">Tipos de Lentes de Contacto</a></div>
                    </div>
                </div>



            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/10-consejos-para-quienes-usan-lentes-de-contacto" title="Consejos Para los que usan Lentes de Contacto">
                        <img src="/img/blog/ico-lentes-contacto-como-usar.jpg" class="img-responsive image" title="Consejos Para los que usan Lentes de Contacto" alt="Consejos Para los que usan Lentes de Contacto">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/10-consejos-para-quienes-usan-lentes-de-contacto" title="Consejos Para los que usan Lentes de Contacto">Consejos Para los que usan Lentes de Contacto</a></div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/si-usas-anteojos-te-damos-los-mejores-consejos" title="Si usas Anteojos, te damos los mejores consejos">
                        <img src="/img/blog/ico-la-mejor-opcion-de-anteojos.jpg" class="img-responsive image" title="Si usas Anteojos, te damos los mejores consejos" alt="Si usas Anteojos, te damos los mejores consejos">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/si-usas-anteojos-te-damos-los-mejores-consejos" title="Si usas Anteojos, te damos los mejores consejos">Si usas Anteojos, te damos los mejores consejos</a></div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6  ">
                <div class="mg-image cont">
                    <a href="/blog/te-presentamos-los-ultimos-desarrollos-en-tecnologia-para-lentes-y-anteojos" title="Ultimos Desarrollos para Lentes y Anteojos">
                        <img src="/img/blog/ico-tecnologia-lentes.jpg" class="img-responsive image" title="Ultimos Desarrollos para Lentes y Anteojos" alt="Ultimos Desarrollos para Lentes y Anteojos">
                    </a>
                    <div class="overlay">
                        <div class="text"><a href="/blog/te-presentamos-los-ultimos-desarrollos-en-tecnologia-para-lentes-y-anteojos" title="Ultimos Desarrollos para Lentes y Anteojos">Ultimos Desarrollos para Lentes y Anteojos</a></div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    {{--<div class="main-content has-heading">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="col-md-9 col-lg-offset-2 pad-b30">--}}
    {{--<p class="font16">A continuación, un listado de todos los Artículos realizados por la--}}
    {{--empresa.</p>--}}
    {{--</div>--}}

    {{--<div class="roll-gallery">--}}
    {{--<div id="gallery-v1-filter">--}}
    {{--<div data-filter="*" class="cbp-filter-item">--}}
    {{--Todos--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".integral">--}}
    {{--Consulta Oftalmológica Integral--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".optometria">--}}
    {{--Consulta de Optometría--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".auxiliares">--}}
    {{--Exámenes Auxiliares--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".adicionales">--}}
    {{--Exámenes Adicionales--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".cirugias">--}}
    {{--Cirugías--}}
    {{--</div>--}}

    {{--<div class="cbp-filter-item" data-filter=".optica">--}}
    {{--Óptica--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div id="gallery-v1" class="galleries cbp" data-item="4" data-layout="grid" data-gaph="1"--}}
    {{--data-gapv="1">--}}
    {{--<div class="  cbp-item integral optometria gallery-item">--}}
    {{--<div class="cbp-caption">--}}
    {{--<div class="gallery-item-wrap">--}}
    {{--<a href="/casos/testimonio-01"><img src="/img/proyecto/miopia.jpg"--}}
    {{--alt="Caso Miopia Oftalmo Vissum"--}}
    {{--title="Caso Miopia Oftalmo Vissum"></a>--}}
    {{--<div class=" gallery-lightbox">--}}
    {{--<h4 class="gallery-title"><a href="/casos/testimonio-01">Miopía</a></h4>--}}
    {{--<a class="cbp-lightbox" href="/casos/testimonio-01" data-title="proyecto pendiente">--}}
    {{--<i class="fa fa-search"></i>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- /.cbp-item -->--}}
    {{--<div class="  cbp-item auxiliares adicionales gallery-item">--}}
    {{--<div class="cbp-caption">--}}
    {{--<div class="gallery-item-wrap">--}}
    {{--<a href="/casos/testimonio-02"><img src="/img/proyecto/asigmatismo.jpg"--}}
    {{--alt="Caso Asigmatismo Oftalmo Vissum"--}}
    {{--title="Caso Asigmatismo Oftalmo Vissum"></a>--}}
    {{--<div class="  gallery-lightbox">--}}
    {{--<h4 class="gallery-title"><a href="/casos/testimonio-02">Asigmatismo</a>--}}
    {{--</h4>--}}
    {{--<a class="cbp-lightbox" href="/casos/testimonio-02" data-title="proyecto pendiente">--}}
    {{--<i class="fa fa-search"></i>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- /.cbp-item -->--}}
    {{--<div class="  cbp-item cirugias gallery-item">--}}
    {{--<div class="  cbp-caption">--}}
    {{--<div class="  gallery-item-wrap">--}}
    {{--<a href="/casos/testimonio-03"><img src="/img/proyecto/operacion.jpg"--}}
    {{--alt="Casos clinicos operacion Oftalmo Vissum"--}}
    {{--title=""></a>--}}
    {{--<div class=" gallery-lightbox">--}}
    {{--<h4 class="  gallery-title"><a href="/casos/testimonio-03">Operación</a>--}}
    {{--</h4>--}}
    {{--<a class=" cbp-lightbox" href="/casos/testimonio-03" data-title="Hallery">--}}
    {{--<i class="fa fa-search"></i>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- /.cbp-item -->--}}
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
    {{--</div><!-- /#portfolio-v1 -->--}}

    {{--<div class="gallery-button">--}}
    {{--<a class="roll-button" href="/./inc/ajax/g2" data-page="3">ver mas</a>--}}
    {{--</div>--}}
    {{--</div><!-- /.roll-gallery -->--}}
    {{--</div><!-- /.col-md-12 -->--}}
    {{--</div><!-- /.row -->--}}
    {{--</div><!-- /.container -->--}}
    {{--</div><!-- /.main-content -->--}}
@endsection
@section('filter')
    <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');

                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>

@endsection
