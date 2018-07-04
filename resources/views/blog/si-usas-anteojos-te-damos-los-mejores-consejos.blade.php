@extends('layouts.app')
@section('title','Si usas Anteojos, te damos los mejores consejos ')
@section('description',' Elige siempre un revestimiento antirreflectante para tus lentes. Este revestimiento transparente elimina los reflejos molestos, mejora la visión nocturna.')
@section('url','https://www.oftalmovissum.pe/blog/si-usas-anteojos-te-damos-los-mejores-consejos')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Si usas Anteojos, te damos los mejores consejos </strong></h1>
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
                        <h2>Anteojos</h2>

                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/la-mejor-opcion-de-anteojos.jpg" alt="Si usas Anteojos, te damos los mejores consejos" title="Si usas Anteojos, te damos los mejores consejos">
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
                           <p><b>1. </b>Elige siempre un revestimiento antirreflectante para tus lentes. Este revestimiento transparente elimina los reflejos molestos, mejora la visión nocturna y permite a las personas ver tus ojos con más claridad.</p>
                            <p><b>2. </b>Para lentes más delgadas, más ligeras y más atractivas, elige lentes de plástico de alto índice de policarbonato con un diseño asférico.</p>
                            <p><b>3. </b>Los lentes fotocromáticos que se oscurecen automáticamente con la luz solar son una gran opción si pasa tiempo al aire libre y no quieres llevar siempre contigo un par de lentes de sol.</p>
                            <p><b>4. </b>Si tienes más de 40 años, ¿por qué anunciar tu edad con lentes bifocales o trifocales? Los lentes progresivos sin línea proporcionan una visión clara en todas las distancias y dan  a los adultos mayores una apariencia más juvenil.</p>
                            <p><b>5. </b>Finalmente, ten en cuenta que tienes muchas opciones en anteojos y puede ser confuso. Visita nuestra optica en la clinica y recibe el consejo de nuestros expertos para encontrar marcos y lentes que te ayudarán a ver y verte lo mejor posible.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>¿Como son los anteojos para la presbicia?</h3>
                           <p>La presbicia es la pérdida de capacidad de enfoque relacionada con la edad que afecta virtualmente a todos los mayores de 40 años. En algún momento, la letra pequeña se vuelve imposible de leer sin lentes multifocales (si ya usas anteojos para miopía, hipermetropía o astigmatismo) o sin anteojos de visión simple (si  es que no necesitas lentes indicados para ver los objetos de lejos).</p>

                            <p>Los anteojos de lentes multifocales y visuales disponibles para la corrección de la presbicia son:</p>
                            <h3>1. Anteojos para Leer</h3>
                            <ul>
                                <li>Se trata de lentes de visión única que contienen un poder de aumento que permite que una persona con buena visión a distancia natural pueda ver claramente de cerca después de la aparición de la presbicia. La visión de lectura se restaura cuando se usan estas lentes, pero los objetos distantes se verán borrosos a través de ellas. Las gafas de lectura se pueden comprar con o sin receta, y generalmente están disponibles en potencias que van desde +1.00 a +3.00 dioptrías.</li>
                            </ul>
                            <h3>2. Anteojos de Lentes Bifocales</h3>
                            <ul>
                                <li>Los bifocales tradicionales tienen una zona claramente definida en la mitad superior de la lente para la visión a distancia y una zona para la visión de cerca en la mitad inferior de la lente. Las zonas están separadas por una línea notable.</li>
                            </ul>


                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                           <h3>3. Anteojos Lentes Trifocales</h3>
                            <ul>
                                <li>Estas lentes tienen tres zonas diferentes para ver a diferentes distancias (cerca, intermedio y lejos) y pueden personalizarse para que se adapte a su estilo de vida u ocupación.</li>
                            </ul>

                            <h3>4. Anteojos de Lentes progresivos</h3>

                            <ul>
                                <li>Estas lentes tienen muchas ventajas sobre los bifocales y trifocales porque permiten al usuario enfocarse a diferentes distancias, no solo dos o tres. Debido a que no tienen líneas, las lentes progresivas permiten una transición suave y cómoda de una distancia a otra. Son una opción mucho mejor para personas activas que realizan múltiples tareas.</li>
                            </ul>
                            <h3>5.Lentes de enfoque variable</h3>
                            <ul>
                                <li>Estas innovadoras lentes multifocales se ven como lentes de visión simple, pero se pueden ajustar (con un pequeño dial en el marco) para proporcionar una visión clara a cualquier distancia. No puede ver objetos distantes, intermedios y cercanos simultáneamente con estos lentes, pero puede "marcar" la potencia que necesita para ver claramente a una distancia específica, con un campo de visión más amplio que el proporcionado por lentes convencionales multifocales o lentes progresivas.</li>
                            </ul>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection