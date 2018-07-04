@extends('layouts.app')
@section('title','Cirugía Láser para ojos, conoce los detalles de esta operación')
@section('description','La cirugía con láser ayuda a las personas que tienen miopía, hipermetropía o una córnea con  forma inusual, llamada astigmatismo, pero no es para todos. ')
@section('url','https://www.oftalmovissum.pe/blog/cirugia-ocular-para-mejorar-tu-vista-como-saber-si-es-indicada-para-mi')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Cirugía Láser para ojos, conoce los detalles de esta operación. </strong></h1>
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
                        <h2>Cirugía Láser para ojos</h2>
                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/cirugia-laser.jpg" alt="Cirugía Láser para ojos" title="Cirugía Láser para ojos">
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
                            <h3>Quienes son buenos candidatos para la cirugía de la vista</h3>
                            <p>La cirugía con láser ayuda a las personas que tienen miopía, hipermetropía o una córnea con  forma inusual, llamada astigmatismo, pero no es para todos. Podría funcionar para ti si es que cumples con los siguientes requisitos:</p>
                            <ul>
                                <li>Tu prescripción o medida de lentes  no ha cambiado durante al menos un año</li>
                                <li>Tu actividad laboral permite la cirugía ocular con láser</li>
                                <li>Tus ojos y tu salud general son buenas</li>
                            </ul>
                            <h3>Algunas situaciones no te hacen buen candidato para la cirugía de ojos</h3>
                            <p>Las enfermedades que afectan la recuperación luego de la operación de ojos, pueden hacer que la cirugía de la vista no sea lo mas indicado. Si tienes diabetes, VIH, lupus o artritis reumatoide, habla con tu doctor acerca de cuales serian las mejores opciones según el caso. Otras afecciones que requieren una evaluación cuidadosa y podrían hacerte un candidato pobre para la cirugía láser para ojos incluyen:</p>
                            <ul>
                                <li>Ojos secos</li>
                                <li>Pupilas de tamaño grandes</li>
                                <li>Córneas muy delgadas</li>
                                <li>Queratocono, un trastorno de la córnea</li>
                            </ul>

                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>Qué esperar durante la cirugía ocular láser</h3>
                            <p>La cirugía ocular con láser generalmente toma menos de 10 minutos. Tu globo ocular se adormecerá, pero permanecerá despierto. Puedes sentir presión, pero no deberías sentir dolor. Tu visión se atenuará durante el procedimiento, y es posible que notes un olor a quemado a medida que el láser trabaja en su córnea. Después, usarás un vendaje para proteger  tus ojos, que pueden picar o quemar, y te pondrás gotas para los ojos por unos días o hasta 2 semanas.</p>
                            <p>No hay garantía de que puedas dejar sus anteojos por completo, incluso luego de una cirugía exitosa. Leer y menejar de noche puede requerir gafas. Si antes de la cirugía tienes una medida de lentes muy fuerte, existe la posibilidad de que aún necesites anteojos la mayor parte del tiempo después del procedimiento. Las cirugías estándar de visión con láser no tratan la presbicia, que es la visión borrosa en primer plano que comienza después de los 40 años de edad.</p>
                            <h3>Cómo elegir un buen cirujano ocular para la cirugía de ojos.</h3>
                            <ul>
                                <li>Pregúntales a tus amigos que han tenido una cirugía exitosa y que realizada  con la ultima tecnología en equipos.</li>
                                <li>Busca un médico con al menos 200 cirugías y que haga un seguimiento de los pacientes cuidadosamente después de la operación y recuperación.</li>
                                <li>El precio es importante, pero tus ojos lo son más. Evita las ofertas que suenan demasiado buenas para ser ciertas.</li>
                            </ul>

                        </div>
                    </div><!-- /.gallery-img -->

                   @include('includes.article-serv')
                    <!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection