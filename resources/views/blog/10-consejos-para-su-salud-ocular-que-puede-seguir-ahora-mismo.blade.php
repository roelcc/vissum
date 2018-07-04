@extends('layouts.app')
@section('title','10 Consejos para su salud ocular que puedes seguir ya mismo')
@section('description','Sin duda actualmente vivimos un mundo en el que todos los mensajes a nuestro alrededor requieren de la vista para ser interpretados.')
@section('url','https://www.oftalmovissum.pe/blog/10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo')
@section('image','https://www.oftalmovissum.pe//img/blog/salud-ocular-redes.jpg')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Consejos para su salud ocular </strong></h1>
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
                        <h2>10 Consejos para su salud ocular que puede seguir ahora mismo</h2>
                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                            {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/salud-ocular.jpg" alt="Consejos Para la Salud Ocular" title="Consejos Para la Salud Ocular">
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
                           <h3>1.Ponte en pausa frente a la pantalla de su teléfono o computadora durante  20 segundos</h3>
                            <p>Mirar una computadora (o cualquier pantalla digital) no dañará tus ojos, pero puede hacer que se sientan cansados ​​y secos. Sorprendentemente, parpadeamos la mitad de veces cuando miramos una pantalla. Sigue la regla 20-20-20: cada 20 minutos frente a la pantalla, mira al menos a 20 metros de distancia durante al menos 20 segundos. Además, ajusta la pantalla de modo que quede a unos 80 cm de distancia y ligeramente por debajo del nivel de tus ojos. Baja el resplandor o el brillo de tu dispositivo  o usa un filtro de pantalla en la computadora.</p>
                            <h3>2.Siempre use anteojos de sol</h3>
                            <p>La radiación UV puede dañar tus ojos al igual que su piel. Los efectos se suman y pueden causar problemas como cataratas, quemaduras de córnea e incluso cáncer del párpado. Siempre que estés afuera, incluso en días nublados, usa gafas de sol o lentes de contacto que bloqueen del 99% al 100% de los rayos UV-A y UV-B. Las lentes protectoras no tienen que ser muy caras, solo revisa la etiqueta. Los sombreros bloquean la exposición, también. La nieve, el agua, la arena y el concreto también pueden reflejar los rayos UV.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                        data-toggle="modal" data-target="#myModal"
                                        title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>3.Usa anteojos de seguridad en el trabajo y durante el deporte</h3>
                            <p>Casi la mitad de las lesiones oculares ocurren en el hogar y no en el lugar de trabajo. Usa lentes de seguridad siempre que un durante una tarea esta pueda enviar desechos volando o salpicar productos químicos peligrosos. Los anteojos protectores también previenen el 90% de las lesiones oculares relacionadas con las actividades deportivas. Los lentes deben estar hechos de plástico o policarbonato, pero nunca de vidrio, ya que este es 10 veces más resistente a los impactos que otros materiales. </p>
                            <h3>4.Come haciéndole caso a tu corazón y a tus ojos</h3>
                            <p>Los alimentos que ayudan a la circulación son buenos para tu corazón, ojos y la vista. Elije alimentos saludables para tu corazón, como frutas cítricas, verduras de hojas oscuras y granos enteros. Los alimentos ricos en zinc (frijoles, vainitas, maní, carne roja magra y aves) pueden ayudar a los ojos a resistir el daño de la luz.  Las zanahorias ayudan a la vista: la vitamina A que contienen es importante para una buena visión. Otros nutrientes que ayudan a los ojos incluyen el betacaroteno (que se encuentra en muchas frutas y verduras amarillas o anaranjadas) y la luteína y la zeaxantina (componentes que están en en vegetales de hojas verdes y productos coloridos).</p>
                            <h3>5.No ignores las molestias en tus ojos</h3>
                            <p>Si tus ojos tienen picazón o están rojos, alívialos con compresas frías, antihistamínicos o gotas para los ojos. Si sientes mucha incomodidad, como si tuvieras arena en el ojo, enjuagua con agua limpia o solución salina. Consulta a un médico especialista si los síntomas continúan o si tienes dolor en los ojos, secreciones, hinchazón o sensibilidad a la luz. Otras razones para visitar la clínica son: manchas oscuras, destellos de luz o cualquier momento en el que no pueda ver normalmente.</p>
                            <h3>6.Limpia sus lentes de contacto</h3>
                            <p>Cuida tus ojos ocupándote de tus lentes de contacto. Siempre lavate las manos antes de manipular  los lentes. Usa solo limpiadores y gotas aprobados por tu oculista. Limpia, enjuagua y seca el estuche cada vez que retires los lentes, y reemplázala cada dos o tres meses. No uses lentes cuando estás nadando o usando productos de limpieza como lejía. No dejes lentes de uso diario mientras duermes, ni siquiera para dormir la siesta. Y no use lentes por más tiempo de lo recomendado en las indicaciones del fabricante</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>7.Bote el maquillaje para ojos que esté viejo u hongueado</h3>
                            <p>Las bacterias crecen fácilmente en maquillaje líquido o cremoso para los ojos. Tira los productos para los ojos después de 3 meses. Si desarrollas una infección, elimina de inmediato todo el maquillaje de tus ojos y consulta a un médico. Si tiendes a tener reacciones alérgicas, intenta con un solo producto nuevo a la vez. Nunca compartas cosméticos y no uses las muestras de la tienda en tus ojos. Lávete bien la cara antes y después de usar maquillaje, y no apliques cosméticos en el interior de las líneas de tus pestañas.</p>
                            <h3>8.Toma exámenes oculares regulares</h3>
                            <p>Debes revisar tus ojos regularmente, incluso si no usas anteojos. Pregúnta en la clinica con qué frecuencia debes tomar exámenes . Será al menos cada dos años entre los 18 y los 60 años, o cada año si eres mayor, si usas lentes de contacto o si tienes factores de riesgo como diabetes, presión arterial alta o antecedentes familiares de enfermedades oculares.</p>
                            <h3>9.Lee las etiquetas de los remedios</h3>
                            <p>Muchos tipos de remedios o combinaciones de medicamentos pueden afectar tu visión. Presta atención a los posibles efectos secundarios de varios medicamentos utilizados para tratar diferentes afecciones. Informe a tu doctor si notas problemas como ojos secos o llorosos, visión doble, sensibilidad a la luz, párpados hinchados o caídos y visión borrosa.</p>
                            <h3>10.Deja de fumar ya mismo</h3>
                            <p>Si fumas, detente. Fumar significa un aumento dramático en la incidencia de degeneración macular y también aumenta el riesgo de desarrollar cataratas y agravar los ojos secos incómodos. También acumula placa en el torrente sanguíneo y debilita las arterias. Esto no solo aumenta el riesgo de un ataque cardíaco, sino que también puede dañar tu retina y causar pérdida de visión. La buena noticia es que después de dejar de fumar, su riesgo de enfermedad ocular es aproximadamente el mismo que el de los no fumadores.</p>
                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection