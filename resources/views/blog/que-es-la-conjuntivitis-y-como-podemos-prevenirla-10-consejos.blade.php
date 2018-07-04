@extends('layouts.app')
@section('title','¿Que es la conjuntivitis y como prevenirla? - 10 Consejos')
@section('description','La Conjuntivitis es un problema común de los ojos y  se trata fácilmente, podemos ver que con algunas precauciones simples a menudo se puede evitar.')
@section('url','https://www.oftalmovissum.pe/blog/que-es-la-conjuntivitis-y-como-podemos-prevenirla-10-consejos')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>¿Que es la conjuntivitis?  </strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/ artículos</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
    <div class="main-content single-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox text-center">
                        <h2>Que es la conjuntivitis y como podemos prevenirla - 10 Consejos </h2>
                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/conjuntivitis.jpg" alt="¿Que es la conjuntivitis? " title="¿Que es la conjuntivitis? ">
                        </div>

                        <br>
                        <div class="face-share text-center ">
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
                        <div>

                           <p>La Conjuntivitis es un problema común de los ojos y generalmente se trata fácilmente, podemos ver que con algunas precauciones simples, a menudo se puede evitar.</p>
                            <p>Cualquier persona puede verse afectada, pero los niños en edad preescolar, los escolares, los estudiantes universitarios, los docentes y los trabajadores de guarderías están particularmente en riesgo de contraer esta enfermedad porque trabajan muy de cerca con los demás en el salón.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <p>Estos son los datos básicos sobre la conjuntivitis que debes saber:</p>
                            <ul>
                                <li>La conjuntivitis, es la inflamación de la capa delgada y clara de la parte blanca del ojo y el interior de los párpados (conjuntiva).</li>
                                <li>Aunque la conjuntiva es transparente, contiene vasos sanguíneos que se superponen a la esclerótica del ojo.</li>
                                <li>Cualquier cosa que desencadene inflamación causará la dilatación de estos vasos conjuntivales. Esto es lo que causa los ojos rojos e inyectados en sangre.</li>
                            </ul>
                            <p>La conjuntivitis puede tener varias causas  pero muchos oftalmólogos usan el término  conjuntivitis para referirse  a la del tipo viral, una infección altamente contagiosa causada por una variedad de virus.</p>
                            <h3>¿Qué causa Conjuntivitis?</h3>
                            <p>Las causas principales de conjuntivitis determinan también sus tipos:</p>
                            <ol>
                                <li>Conjuntivitis viral Causado por un virus, como el resfriado común. Este tipo de conjuntivitis es muy contagioso, pero generalmente desaparecerá por sí solo dentro de varios días sin tratamiento médico.</li>

                                <li>Conjuntivitis bacterial. Causado por bacterias, este tipo de conjuntivitis puede causar daños graves al ojo si no se trata rapidamente.</li>
                                <li>Conjuntivitis alérgica. Causado por irritantes a los ojos como el polen, el polvo y la caspa de animales entre las personas alérgicas. La conjuntivitis alérgica puede ser estacional (polen) o brotar durante todo el año (polvo, caspa de mascotas).</li>
                            </ol>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>Diez consejos para prevenir la conjuntivitis.</h3>
                            <ul>
                                <li>Nunca compartas tus lentes de contacto de color o contactos de efectos especiales con amigos.</li>
                                <li>Lávate las manos con frecuencia, especialmente cuando pases tiempo en la escuela, universidad, trabajo o en otros lugares públicos.</li>
                                <li>Ten a mano un desinfectante de manos  y úsalo con frecuencia.</li>
                                <li>Cúbrete la nariz y la boca al toser o estornudar, y evita frotar o tocarte los ojos.</li>
                                <li>Limpia con frecuencia superficies como counters, tocadores de baño, manijas de lavatorios y teléfonos con un limpiador antiséptico apropiado.</li>
                                <li>Nunca compartas artículos personales como paños, toallas de mano o pañuelos de papel.</li>
                                <li>Si sabes que sufres de alergias estacionales, pregúntale a tu médico qué puede hacer para minimizar los síntomas antes que comiencen.</li>
                                <li>Si usas lentes de contacto, sigue las instrucciones de tu oftalmólogo para el cuidado y reemplazo de tus lentes, y usa las soluciones para lentes de contacto adecuadamente o considera cambiar a contactos desechables diarios.</li>
                                <li>Al nadar, usa gafas de natación para protegerte de las bacterias y otros microorganismos en el agua que pueden causar conjuntivitis.</li>
                                <li>Antes de ducharte, usar un jacuzzi o estar en agua de cualquier tipo, retira tus lentes de contacto para evitar atrapar bacterias entre tus ojos y las lentes de contacto.</li>
                            </ul>





                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection