@extends('layouts.app')
@section('title','Ultimos Desarrollos en Tecnología para Lentes y Anteojos')
@section('description','Tal vez una de  las razones de la perdurable popularidad de los anteojos sean los últimos avances tecnológicos siendo livianas y más atractivas que nunca.')
@section('url','https://www.oftalmovissum.pe/blog/te-presentamos-los-ultimos-desarrollos-en-tecnologia-para-lentes-y-anteojos')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Te presentamos los últimos desarrollos en tecnología para lentes y anteojos</strong></h1>
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
    <div class="main-content single-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox text-center">
                        <h2>Últimos Desarrollos para Lentes y Anteojos</h2>

                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/tecnologia-lentes.jpg" alt="Si usas Anteojos, te damos los mejores consejos" title="Si usas Anteojos, te damos los mejores consejos">
                        </div>

                        <br>
                        <div class="face-share text-center ">
                            @include('includes.share-buttons')
                        </div>
                        <br>
                        <div>
                            <p>Tal vez una de las razones de la perdurable popularidad de los anteojos sean los últimos avances tecnológicos que hacen que los marcos y las lentes modernas sean más delgadas, livianas y más atractivas que nunca.

                            </p>
                            <h3>
                                Ultimos Materiales para los Marcos</h3>
                            <p>Los materiales de los marcos para gafas también se han revolucionado con la llegada de nuevos plásticos y varios tipos de metales. Los marcos generalmente están fabricados de plástico o metal, pero se puede usar una amplia variedad de materiales, dependiendo de las características deseadas del marco.</p>
                            <ul>
                                <li>Por ejemplo, Los diseños mejorados de almohadillas para la nariz también contribuyen a la comodidad y la apariencia de cómo se colocan los anteojos frente a la cara. Las nuevas almohadillas nasales de silicona,  evitan el “deslizamiento hacia abajo" pero son tan livianas y suaves que apenas se notan.</li>
                                <li>Algunos marcos de anteojos tienen componentes que se pueden colocar en su lugar, en lugar de sujetarlos con tornillos u otros medios. Este tipo de función puede ser útil si quieres combinar ropa y accesorios de diferentes colores con el mismo conjunto de lentes.</li>
                                <li>Ciertos tipos de marcos de anteojos son muy flexibles, lo que reduce la posibilidad de rotura. Las bisagras de resorte también son flexibles. Este tipo de marcos son ideales para los anteojos de los niños, debido al factor de durabilidad.</li>
                            </ul>
                            <p>Para gafas de seguridad, es posible que necesite sun material de cuadro ligero y duradero, como el policarbonato. Si padeces alergias en la piel, probablemente debas usar monturas de anteojos hechos de materiales hipoalergénicos, como titanio o acero inoxidable, para evitar una afección de la piel conocida como dermatitis de contacto.</p>

                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                           <h3>Los Tipos de lentes más populares indicados hoy incluyen:</h3>
                           <ul>

                               <li>Lentes asféricas, que dan un perfil más delgado, más atractivo y una visión periférica más nítida que las lentes de anteojos convencionales.</li>
                               <li>Lentes de plástico de alto índice que son más delgadas y ligeras que los lentes convencionales y proporcionan una mejor protección incorporada contra los rayos ultravioleta (UV) del sol.</li>
                               <li>Los lentes de tecnología Wavefront están fabricados en base a mediciones muy precisas de la forma en que la luz viaja a través de su ojo, lo que ayuda a agudizar la claridad visual.</li>
                               <li>Los lentes de policarbonato y Trivex son más delgados, más livianas y hasta 10 veces más resistentes a los impactos que los lentes de plástico normales, por lo que son la opción perfecta para anteojos de seguridad, anteojos deportivos y anteojos para niños y adultos activos.</li>
                               <li>Los lentes fotocromáticos son lentes transparentes que brindan una protección 100 por ciento UV y se oscurecen automáticamente en respuesta a la luz solar para reducir la necesidad de anteojos de sol recetados.</li>
                               <li>Las lentes polarizadas disminuyen el brillo de las superficies planas y reflectantes (como el agua) y también reducen la fatiga ocular.</li>
                           </ul>



                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                           <p>El recubrimiento antirreflectante es un complemento mas novedoso para los lentes. El recubrimiento puede mejorar drásticamente el aspecto y la comodidad de tus anteojos al reducir la distracción de los reflejos del lente que interfiere con el contacto visual  y que hacen que tus lentes se vean más gruesos. Los lentes recubiertos con AR también reducen el brillo y permiten que entre más luz en tus ojos para una mejor visión nocturna.</p>
                            <p>Otros revestimientos de lentes incluyen un recubrimiento resistente a los arañazos, revestimiento antivaho y tratamientos con lentes bloqueadores de rayos UV.</p>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection