@extends('layouts.app')
@section('title','Colirio, gotas para los ojos. ¿Cuales son adecuados para mi?')
@section('description','Si tienes los ojos secos e irritados, puedes ir a la botica a comprar gotas para los ojos. Pero  todos los diferentes tipos de colirio ¿importa cuál elijas?')
@section('url','https://www.oftalmovissum.pe/blog/colirio-gotas-para-los-ojos-cuales-son-adecuados-para-mi')
@section('image','https://www.oftalmovissum.pe/img/blog/gotas-para-los-ojos-redes.jpg')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Colirio, gotas para los ojos</strong></h1>
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
                        <h2>¿Cuales son adecuados para mi?</h2>
                        <p>Si tienes los ojos secos e irritados, puedes ir a la botica a comprar gotas para los ojos. Pero cuando te encuentres frente al mostrador ante innumerables opciones. Con todos los diferentes tipos de colirio, ¿importa cuál elijas?</p>
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/gotas-para-los-ojos.png" alt="¿Cuales son adecuados para mi?" title="¿Cuales son adecuados para mi?">
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

                           <p>Sí, definitivamente que sí. Tenemos diferentes tipos de gotas para tratar diferentes problemas, como alergias y ojos secos. Y los incorrectos pueden empeorar tus síntomas

                               En la mayor parte, hay tres tipos principales de gotas para los ojos:</p>
                            <ul>
                                <li>Lagrimas artificiales</li>
                                <li>Gotas de alergia</li>
                                <li>Gotas contra el enrojecimiento</li>
                                <li>Gotas para lentes de contacto</li>
                            </ul>
                            <p>Algunas gotas para los ojos pueden hacer una combinación de cosas, pero si comprende estos tipos básicos, sabrás cómo elegir perfectamente.</p>
                            <p>También puedes encontrar algunas gotas para los ojos naturales, homeopáticas o herbales. En general, aun no hay mucha evidencia sobre qué tan bien funcionan realmente.</p>
                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>1.Lagrimas artificiales</h3>
                            <p>¿Cuándo usarlas? Las lágrimas artificiales son las gotas indicadas para los ojos secos. Su trabajo principal es mantener la superficie de tus ojos agradable y húmeda.</p>
                            <p>¿Que ingredientes tienen? Estas lágrimas intentan imitar lágrimas reales, pero resulta que eso no es muy sencillo. Entonces, varias marcas usan diferentes mezclas de ingredientes, como:</p>
                            <ul>
                                <li>Lubricantes para mantener los ojos húmedos</li>
                                <li>Electrolitos, como el sodio y el potasio, que pueden ayudar a suavizar la superficie de su ojo</li>
                                <li>Goma guar, encontrada en las gotas más aceitosas. Puede ser de gran ayuda si tienes los ojos secos porque tus lágrimas se secan rápidamente.</li>
                                <li>Conservantes para evitar que las bacterias crezcan en el frasco de gotas</li>
                            </ul>

                            <p>Es posible que debas probar diferentes marcas para ver cuál funciona mejor para sus ojos.</p>
                            <p>Cuidado con los conservantes, en algunas personas, pueden empeorar los ojos secos. Algunas personas son alérgicas a los conservantes, y en otras pueden irritar sus ojos.</p>
                            <p><strong>Evita las lágrimas artificiales que contienen conservantes si:</strong></p>
                            <ul>
                                <li>Ellas molestan tus ojos</li>
                                <li>El estado de tus ojos secos es severo</li>
                                <li>Utilizas gotas más de cuatro o seis veces al día</li>
                            </ul>
                            <p>Cuando busques gotas para los ojos sin conservantes, ten en cuenta que no vienen en la típica botella para colirios. Por lo general, los encuentras en viales de un solo uso. Le quitas la tapa, colocas las gotas y tiras el vial. También tienden a ser más caros que otros tipos.</p>
                            <h3>2. Gotas para la alergia</h3>
                            <p>Estas son las gotas a las que hay que acudir cuando necesitas alivio de tus ojos rojos, llorosos y con picazón causados por la caspa de mascotas, el polen, los mohos y otros causantes de alergias comunes.</p>
                            <p>¿Que hay en ellos? Cuando tu cuerpo tiene una reacción alérgica, libera un montón de histaminas. Eso es lo que desencadena la secreción nasal, la picazón en los ojos y todo lo demás. El ingrediente clave en las gotas para la alergia es un medicamento llamado antihistamínico, que impide que las histaminas hagan su trabajo y previene los síntomas de la alergia. Algunas gotas para la alergia más nuevas, llamadas estabilizadores de células cebadas, funcionan impidiendo que tu cuerpo produzca histaminas en primer lugar.</p>

                            <h3>3. Gotas contra el enrojecimiento</h3>
                            <p>¿Cuándo usarlas?. También se llaman gotas o colirio descongestionantes, pueden ayudar a eliminar el enrojecimiento de tus ojos. Pero usalas con precaución. Si las colocas durante más de unos días, pueden irritar los ojos y empeorar el enrojecimiento. También,  si las usas con frecuencia, tus ojos empiezan a depender de ellas y pueden ponerse rojos cuando dejes de usarlas. Evita estas gotas si tienes los ojos secos.</p>
                            <p>En ocasiones, las gotas antienrrojecimiento también contienen antihistamínicos, que pueden aliviar la picazón causada por las alergias.</p>
                            <p>Que ingredientes usan? Estas gotas usan un ingrediente llamado vasoconstrictor. Contrae los vasos sanguíneos en la superficie de tu ojo. Eso hace que el enrojecimiento se vaya</p>

                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>4. Gotas para lentes de contacto</h3>
                            <p>Si usas lentes de contacto, puedes hacer que la elección de gotas para los ojos sea un poco más difícil. Cuando tus lentes de contacto estén secos, intenta volver a humedecerlos con gotas hechas para tu tipo de lentes. Consulta con la clinica antes de usar cualquier otro tipo de gotas y evita aquellas con conservantes.</p>
                            <p>Por ultimo.. Cuándo ver a tu doctor?</p>
                            <p>Algunas veces, los ojos secos, rojos o irritados aparecen y desaparecen, y no representan un gran problema. En otros casos, es posible que tengas un problema médico que necesite más que solo unas gotas. Consulta en la clínica si tienes problemas en los ojos que no desaparecen, inclusive después de ponerte gotas por unos días. Además, chequea si ponerte colirio empeora el problema o afecta tu visión.</p>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection