@extends('layouts.app')
@section('title','10 Consejos para quienes usan lentes de contacto')
@section('description','Reemplaza tus lentes con la frecuencia que sugiera tu doctor, incluso si no los usas todos los días. incluso si todavía se siente fresco.')
@section('url','https://www.oftalmovissum.pe/blog/10-consejos-para-quienes-usan-lentes-de-contacto')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Si vas a usar lentes de contacto, conoce nuestros consejos </strong></h1>
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
                        <h2>Consejos para usar Lentes de Contacto</h2>

                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/lentes-contacto-como-usar.jpg" alt="Consejos, Para usar Lentes de Contacto" title="Consejos, Para usar Lentes de Contacto">
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
                            <h3>1. ¿Por cuánto tiempo puedo usar mis lentes?</h3>
                           <p>Reemplaza tus lentes con la frecuencia que sugiera tu doctor, incluso si no los usas todos los días. Por ejemplo, si tienes el tipo desechable que es bueno para un dia, tíralo una vez que lo haya usado, incluso si todavía se siente fresco. Cuando usas lentes por más días de los que deberías, o cuando duermes con lentes que no están hechos para usar durante la noche, aumentas tu riesgo de tener infecciones oculares.</p>
                            <h3>2. Antes de tocar los lentes</h3>
                            <p>Siempre lávate las manos antes de ponerte los lentes o sacarlos. No te enjabones con jabones aceitosos o muy perfumados. Las lentes pueden adherirse a las manos mojadas, así que sécate bien las manos con una toalla sin pelusa. Si deseas usar una crema hidratante, espera hasta después de ponerte  las lentes. El residuo de las lociones y aceites humectantes puede adherirse a ellos.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>3. Poniendote tus lentes</h3>
                            <p>Comienza con el mismo ojo cada vez para no mezclar las lentes derecha e izquierda. Usa tu dedo índice para deslizar la lente fuera del paquete o caja y en la palma de tu mano. Enjuágalo con la solución recomendada por tu oftalmólogo. Coloca la lente en la punta de tu dedo índice. Tira de la tapa inferior hacia abajo con el dedo corazón de la misma mano y sosten el párpado superior con la otra mano. Coloca la lente directamente sobre el iris de su ojo. Suavemente suelta tus párpados, y pestañea.</p>

                            <h3>4. Quitándote tus lentes</h3>
                            <p>Primero, lávese las manos antes de quitar lentes. Para sacar lentes blandos, jale hacia abajo el párpado inferior. Mire hacia arriba o hacia un lado, y mueva suavemente su lente hacia el blanco de su ojo. Con los dedos pulgar e índice, pellizca suavemente la lente y retírala del ojo. Para lentes permeables a los gases, mira hacia abajo, abre bien los ojos y acerca la piel cerca de la esquina de tu ojo hacia la oreja. Acerca tu palma abierta y pestañea. La lente debe aparecer en tu palma.</p>

                            <h3>5. El agua y los lentes no se mezclan</h3>
                            <p>Si no tienes una solución salina  para lentes de contacto, es posible que tengas la tentación de enjuagar tus lentes con agua del lavatorio. No lo hagas! El agua a veces tiene microbios que pueden causar infecciones oculares graves. Ni siquiera uses lentes de contacto en la ducha. Y nunca te metas los lentes en la boca ni uses saliva para mojarlos.</p>
                            <h3>6. Limpieza y almacenamiento</h3>
                            <p>Hay muchas formas de limpiar lentes. Una solución multipropósito te permite limpiar, enjuagar, desinfectar y almacenar tus lentes. Algunos sistemas tienen productos separados para limpieza y enjuague. Las soluciones "sin roce" dicen que el enjuague solo limpiará los lentes, pero la práctica sugiere que el frotamiento los limpia mejor. </p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>7. El estuche de los lentes también importa</h3>
                            <p>Limpia el estuche de tus lentes con cuidado al mismo tiempo que cuidas tus lentes. Debes enjuagarlo al menos todas las noches con una solución desinfectante. Limpia la caja con un pañuelo de papel y deja que se seque al aire para ayudar a eliminar las bacterias persistentes. Reemplaza su caja cada 6 meses o más a menudo.</p>

                            <h3>8. Cuando duelen los ojos con lentes de contacto</h3>
                            <p>Un lente puede sentirse incómodo si hay algo debajo o debajo de el, o si está adentro. Retire el lente y enjuágualo con gotas para rehumedecer o una solución sin peróxido para eliminar la suciedad o el polvo. No sigas usando tus lentes de contacto si sientes molestias. Y no los uses cuando tus ojos ya estén rojos e irritados. Si no mejoran después de dejar de usarlos, consulta a tu doctor de la clínica.</p>
                            <h3>9. Lentes de contacto y deportes</h3>
                            <p>Puedes usar tus lentes para la mayoría de los deportes y actividades. Raramente se mueven o se caen. Además, no se empañan como los anteojosy te proporcionan una mejor visión periférica. Sin embargo, si nadas, especialmente en lagos o ríos o lugares con fuerte corriente de agua, evita usar sus contactos en el agua. Incluso con lentes a prueba de agua, puedes contraer una infección ocular por el agua, y tus lentes pueden ser difíciles de extraer si se mojan. Si accidentalmente los usas en el agua, usa gotas salinas o humedecedoras para aflojarlos y eliminarlos lo antes posible. Luego límpialos y desinféctalos.

                            </p>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection