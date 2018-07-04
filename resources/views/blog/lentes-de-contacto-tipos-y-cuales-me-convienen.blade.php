@extends('layouts.app')
@section('title','Lentes de Contacto, ¿Que tipos hay y cuales me convienen?')
@section('description','Para las personas con problemas de visión, los lentes de contacto son una herramienta efectiva, casi invisible. y sirven para corregir problemas de visión.')
@section('url','https://www.oftalmovissum.pe/blog/lentes-de-contacto-tipos-y-cuales-me-convienen.blade')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Lentes de Contacto </strong></h1>
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
                        <h2>¿Que tipos hay y cuales me convienen? </h2>
                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/lentes-de-contacto.jpg" alt="¿Que tipos hay y cuales me convienen?" title="¿Que tipos hay y cuales me convienen?">
                        </div>

                        <br>
                        <div class="face-share text-center ">
                            <a href="https://facebook.com/sharer.php?u={{ url()->current() }}" target="new"
                               title="Oftalmo Vissum en Facebook"><i class="fa fa-facebook faceshare"></i></a>
                            <a href="https://twitter.com/share" target="new" title="Oftalmo Vissum en Twitter"><i class="fa fa-twitter twittershare"
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
                            <p>Para las personas con problemas de visión, los lentes de contacto son una herramienta efectiva, casi invisible. Las finas lentes plásticas se colocan sobre tu córnea, la parte frontal clara del  ojo, y sirven para corregir problemas de visión, incluyendo miopía, hipermetropía y astigmatismo. Puedes usar lentes de contacto incluso si tiene presbicia y necesitas bifocales. Habla con tu oculista sobre el mejor tipo de lentes para ti. Toma exámenes oculares con regularidad para mantener la salud de tus ojos y asegúrate de que tu medida de anteojos se mantenga actualizada.</p>
                            <h3>Lentes de contacto blandas</h3>
                            <p>Están hechos de un tipo especial de plástico mezclado con agua. El contenido de agua permite que el oxígeno pase a través de la lente a la córnea. Eso hace que las lentes sean más cómodas, disminuye los ojos secos y ayuda a mantener sana tu córnea. Si no recibe suficiente oxígeno, puede hincharse, nublarse y causar visión borrosa u otros problemas más serios.</p>
                            <p>Aspectos positivos de los Lentes de Contacto Blandos: Muchos lentes blandos son desechables, por lo que puedes tirarlos después de usarlos durante un tiempo corto. Tener un nuevo par de contactos suaves significa menos posibilidades de infección, menos limpieza y más comodidad.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <p>Algunos lentes suaves no son desechables. Usas el mismo par durante aproximadamente un año y los limpias cada noche. Por lo general, estos lentes de contacto son más personalizados.</p>
                            <p>En comparación con las lentes rígidas gas permeables, el otro tipo principal de contactos, los lentes blandos se sienten mejor cuando los colocas por primera vez.</p>
                            <p>Como beneficio adicional, muchas lentes blandas brindan protección UV.</p>
                            <p>Aspectos Negativos de los lentes de contacto Blandos: Los contactos blandos absorben los contaminantes más fácilmente que las lentes duras y rígidas permeables al gas. Absorben todo tipo de cosas que pueden irritar sus ojos: humo y aerosoles en el aire y loción o jabón en sus manos.Los contactos suaves también son más frágiles. Pueden romperse o rasgarse más fácilmente que las lentes duras o permeables al gas.</p>
                            <p>Hay dos tipos de lentes de contacto blandos</p>
                            <ul>
                                <li>Los desechables diarios son lentes de contactos suaves que  usas solo por un día y luego los tiras. Eso significa que no tienes que limpiarlos con regularidad o arriesgarte a tener los ojos secos e irritados por las soluciones de contacto. Si tienes alergias, puede ser tu mejor opción.</li>
                                <li>Los lentes hechos a base de silicona crean una lente extremadamente permeable que deja pasar suficiente cantidad de oxígeno a la córnea. También evitan que los depósitos se acumulen. Eso significa menos irritación de los ojos secos. Algunos lentes de silicona están indicados ara uso prolongado, por lo que puedes usarlos por hasta 30 días. Pero se recomienda que elimines cualquier tipo de lente de contacto a la hora de acostarte. ¿Por qué? Tu córnea recibe menos oxígeno cuando duerme con lentes, por lo que el riesgo de complicaciones graves es mayor. Los lentes de silicona no son para todos, así que hable con tu doctor si estás interesado en ellos.</li>
                            </ul>




                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>Lentes de Contacto de colores y suaves</h3>
                            <p>Ademas de ser modernos y divertidos  los contactos de colores pueden ser prácticos. Los lentes de tinte de visibilidad tienen un poco de color para que pueda encontrar su lente si se te caen al piso. No tienen tanto color como para cambiar el color de tus ojos. Las lentes de tinte de mejora reproducen tu color de ojos natural. Los lentes de tinte de color son más oscuros, opacos y cambian el color de tus ojos. Los colores especiales incluyen azul. violeta y verde.</p>
                            <p>Recuerda, los contactos de colores son un dispositivo médico al igual que los lentes claros. Obténlos de tu clinica oftalmologica y en ningún otro lugar. No los compartas con nadie. Límpialos y cuídalos como lo harías con cualquier lente de contacto..</p>
                            <h3>Lentes duros gas permeables </h3>
                            <p>Como su nombre indica, estos son más rígidos que los contactos suaves. Están hechos de silicona y están diseñados para permitir que el oxígeno pase a la córnea.</p>
                            <p>Aspectos Positivos. Es posible que vea mejor que con lentes suaves. Corrigen el astigmatismo sustancial. Son fáciles de cuidar y duraderos.</p>
                            <p>Aspectos Negativos. No se sienten tan bien como los contactos blandos. Lleva más tiempo acostumbrarse a ellos, por lo que debes usarlos todos los días.</p>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection