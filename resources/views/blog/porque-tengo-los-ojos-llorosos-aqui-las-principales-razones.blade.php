@extends('layouts.app')
@section('title','¿Por que tengo los ojos llorosos? Aquí las razones del lagrimeo')
@section('description','Si tienes ojos llorosos, hay varias razones posibles. Abarcan desde alergias, infecciones, conductos lagrimales bloqueados y párpados con una forma inusual. ')
@section('url','https://www.oftalmovissum.pe/blog/porque-tengo-los-ojos-llorosos-aqui-las-principales-razones')
@section('image','https://www.oftalmovissum.pe/img/blog/ojos-llorosos-redes-m.jpg')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>¿Por que tengo los ojos llorosos? </strong></h1>
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
                        <h2>Aquí las razones del Lagrimeo</h2>
                        <p>Si tienes ojos llorosos, hay varias razones posibles. Abarcan desde alergias hasta infecciones, conductos lagrimales bloqueados y párpados con una forma inusual. Así que toma una caja de kleenex, mira tus ojos y descubre por qué tus lágrimas no dejan de correr.</p>
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/ojos-llorosos.jpg" alt="Aquí las razones del Lagrimeo" title="Aquí las razones del Lagrimeo">
                        </div>

                        <br>
                        <div class="face-share text-center ">
                            @include('includes.share-buttons')
                        </div>
                        <br>
                        <div>
                            <h3>1. Alergias</h3>
                            <p>Millones de personas tienen alergias, pero muchas ignoran cómo esto afecta sus ojos. La exposición al polen, a la caspa de las mascotas, a los ácaros y a los humos puede hacer que tus ojos se pongan rojos, con comezón y llorosos. Para obtener alivio, prueba con medicamentos de venta libre, como gotas para los ojos y antihistamínicos. Si no ayudan, es posible que desees visitar a la clínica para obtener medicamentos recetas o soluciones para tu alergia.</p>
                            <h3>2. Conjuntivitis.</h3>
                            <p>Si sus ojos se ven rosados ​​o rojos junto con todas esas lágrimas adicionales, es posible que tenga  el ojo rojo, un tipo frecuente de inflamación. Otros signos son visión borrosa, pus o moco en el ojo y párpados rojos. Si crees que podría tenerlo, consulta a un médico de inmediato. Tu tratamiento dependerá de si la causa es una bacteria, un virus o alergias. Además, asegurate de mantener las manos alejadas de los ojos y lávalas con agua tibia y jabón antes y después de aplicarte el remedio. No compartas toallas, paños o cualquier otra cosa que toque sus ojos.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>3. Conductos lagrimales bloqueados</h3>
                            <p>Tus ojos tienen un sistema de plomería en miniatura que produce lágrimas,  luego de lavar los ojos las lagrimas bajan por un conducto hacia tu nariz. Cuando el conducto se estrecha o se bloquea, las lágrimas vuelven a subir y tus ojos se pondrán llorosos, irritados o infectados. Los signos de este problema incluyen moco, visión borrosa y hasta sangre en las lágrimas.Si tienes los ojos llorosos, muy acuosos y siempre irritados o infectados, consulta inmediatamente a un doctor de la Clínica. El médico puede enjuagar el conducto con solución salina e insertar pequeños globos o tubos para desatorar los bloqueos. Es posible que necesites una cirugía menor para re-construir un nuevo drenaje.</p>
                            <h3>4.Ojos secos</h3>
                            <p>Tus ojos a veces se irritan.  Tu sistema inmune puede responder haciendo demasiadas lágrimas. También pueden tener picazón, ardor, enrojecimiento y problemas de visión. Si los síntomas no desaparecen, es hora de hablar con tu doctor. Si tienes un caso leve, las lágrimas artificiales a menudo ayudan. También puedes tomar remedios para aliviar la inflamación o ayudar a crear lágrimas. Otras opciones incluyen inserciones que actúan como glándulas lagrimales artificiales o una combinación de terapia de luz y masaje ocular.</p>
                            <h3>5.Bultos en los párpados</h3>
                            <p>Si notas un gran bulto en tu párpado, es posible que tengas un orzuelo o un chalazión. Los orzuelos generalmente son dolorosos y más grandes. Los Chalazion rara vez duelen.Para tratar un  de estos problemas en el párpado, empapa una toallita limpia en agua caliente y sosténgala en su párpado durante 10-15 minutos. Haz esto de 3 a 5 veces al día. También puedes masajear suavemente alrededor de un chalazión con un dedo limpio. Si esto no ayuda, tu doctor puede recetarte antibióticos o esteroides para aliviar la hinchazón de un chalazión. Si el bulto no desaparece, o si afecta tu visión, el  doctor puede drenarla. No intentes nunca estallar uno tú mismo; probablemente solo empeorarás las cosas.</p>
                            <h3>6.Pestañas encarnadas</h3>
                            <p>Cuando tus pestañas crecen hacia adentro, se frotan contra tu ojo. Esto lo irrita y causa lágrimas adicionales. Su médico puede extraer un látigo encarnado o sugerir una cirugía para quitar el látigo de forma permanente. Si no recibe tratamiento, podría tener problemas más graves, como arañazos y úlceras en la córnea.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>7.Problemas con tu córnea</h3>
                            <p>Pueden variar desde pequeños rasguños hasta llagas abiertas llamadas úlceras. Las córneas también pueden inflamarse, una afección llamada queratitis. Cada uno de estos puede hacer que tus lágrimas trabajen horas extras. Si tu córnea está rayada, lo sabrás. Su ojo estará extra acuoso, doloroso y muy sensible a la luz. Cuando lo cierras, puedes sentir que hay algo dentro. Para aliviar el dolor, enjuáguate el ojo con solución salina, pestañea varias veces o jala suavemente del párpado superior sobre el párpado inferior. Cualquiera de estos pasos suele eliminar el objeto que te causa problemas. De cualquier manera consulta a tu doctor para evitar una infección.</p>
                            <p>Para las úlceras y la queratitis, consulta a tu médico de inmediato. La demora en la consulta pueden dañar tu vista o causar ceguera. Es probable que tu médico comience el tratamiento con gotas antibacterianas, antivirales o antimicóticas seguidas de gotas antiinflamatorias. Si tu ojo es difícil de tratar, es posible que necesite un trasplante de córnea para salvar tu visión. Si usas lentes de contacto de uso prolongado o no te los sacas por la noche, tienes una mayor probabilidad de contraer queratitis. La mejor manera de prevenir esto es desinfectar adecuadamente las lentes y asegúrese de no usarlas por mucho tiempo.</p>
                            <h3>8.Las causas menos comunes de ojos llorosos incluyen:</h3>
                            <ul>
                                <li>Lesiones oculares</li>
                                <li>Exposición a productos químicos y humos</li>
                                <li>Enfermedades inflamatorias como la artritis reumatoide</li>
                                <li>Cirugía facial</li>
                                <li>Paralisis Facial</li>
                                <li>Ciertos medicamentos</li>
                            </ul>
                            <p>Debes revisar tus ojos regularmente, incluso si no usas anteojos. Pregúnta en la clinica con qué frecuencia debes tomar exámenes . Será al menos cada dos años entre los 18 y los 60 años, o cada año si eres mayor, si usas lentes de contacto o si tienes factores de riesgo como diabetes, presión arterial alta o antecedentes familiares de enfermedades oculares.</p>
                          <blockquote>
                              Si bien pueden haber muchas razones por las cuales tus ojos lagrimean mucho, todos los motivos comparten síntomas similares. Esto hace que encontrar el diagnóstico correcto sea muy importante. Visita a un doctor rápidamente y  te ayudará a descubrir qué causa el exceso de lágrimas y las mejor manera de tratarlas.
                          </blockquote>
                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection