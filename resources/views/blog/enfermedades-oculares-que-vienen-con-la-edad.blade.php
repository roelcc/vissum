@extends('layouts.app')
@section('title','Descubre los Problemas Oculares Relacionados con la Edad')
@section('description','Desde los 40 años de edad, probablemente has notado que tu visión está cambiando, tal vez necesitas anteojos para ver de cerca.')
@section('url','https://www.oftalmovissum.pe/blog/enfermedades-oculares-que-vienen-con-la-edad')
@section('image','')
@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Enfermedades Oculares que vienen con la edad</strong></h1>
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
                        <h2>Conoce que tipo de problemas oculares puedes desarrollar con la edad</h2>
                        {{--<p>Maecenas pulvinar laoreet est a fringilla. Nunc rutrum sit amet nisl a pulvinar. Duis posuere--}}
                        {{--dapibus quam, porta elementum arcu.</p>--}}
                    </div>
                    <div class="roll-spacer h70"></div>
                </div>
                <div class="col-md-12">
                    <div class="gallery-img">
                        <div>
                            <img src="/img/blog/enfermedades-oculares-en-la-edad.jpg" alt="Enfermedades Oculares que vienen con la edad" title="Enfermedades Oculares que vienen con la edad">
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
                            <h3>Descubre los problemas oculares relacionados con la edad</h3>
                            <p>Desde los 40 años de edad, probablemente has notado que tu visión está cambiando. Tal vez necesitas anteojos para ver de cerca o tienes más problemas para adaptarte a los brillos o distinguir algunos colores en la naturaleza. Estos cambios son una parte normal del envejecimiento. Estos cambios por sí solos no nos impiden disfrutar de un estilo de vida activo o  mantener nuestra independencia. De hecho, podemos vivir una vida activa hasta bien entrada la madurez sin experimentar una pérdida de visión severa. Pero a medida que envejecemos, tenemos un mayor riesgo de desarrollar problemas de salud oculares relacionados con la edad. Estos pueden ser: degeneración macular relacionada con la edad, cataratas, enfermedad ocular diabética, glaucoma, disminución de la visión y ojos secos.</p>


                            <h3>Tómate un examen completo de ojos con la pupila dilatada.</h3>
                            <p>Todas las personas de 50 años o más deben visitar a un profesional de la vista para un examen completo de la vista con dilatación de la pupila. Muchas enfermedades oculares no tienen signos o síntomas de advertencia temprana, pero un examen dilatado puede detectar enfermedades oculares en sus etapas iniciales antes de que ocurra la pérdida de la visión. La detección temprana y el tratamiento pueden ayudarte a salvar la vista. Incluso si no tienes problemas de visión, visita a tu doctor en la clinica para un examen de la vista con dilatación pupilar. Luego de la atención te dirán con qué frecuencia necesitas uno según sus factores de riesgo específicos.</p>


                            <div class="btn-mov text-center">
                                <div  class="btn btn-oper "
                                      data-toggle="modal" data-target="#myModal"
                                      title="Escribir al formulario Oftalmo Vissum"><i class="fa fa-envelope"></i>


                                    Escríbenos
                                    {{--<i class="glyphicon glyphicon-send"></i>--}}
                                </div>

                            </div>
                            <h3>1.Glaucoma</h3>
                            <p>El glaucoma es un grupo de enfermedades que pueden dañar el nervio óptico del ojo y provocar la pérdida de la visión y la ceguera. Por lo general, se asocia con presión alta en el ojo y afecta la visión lateral o periférica.</p>
                            <h3>2.Ojos secos</h3>
                          <p>El ojo seco se produce cuando el ojo no produce las lágrimas adecuadamente, o cuando las lágrimas no tienen la consistencia correcta y se evaporan demasiado rápido. El ojo seco puede hacer que sea más difícil realizar algunas actividades, como usar una computadora o leer durante un período prolongado de tiempo. </p>
                            <h3>3.Visión baja</h3>
                            <p>La perdida de visión significa que incluso con gafas, lentes de contacto, medicamentos o cirugía regulares, las personas encuentran que las tareas diarias son difíciles de hacer. Leer el correo, comprar, cocinar, ver televisión y escribir puede parecer un desafío. </p>
                            <h3>4.Degeneración macular relacionada con la edad </h3>
                            <p>Esta es una enfermedad relacionada on el envejecimiento que gradualmente destruye la visión central aguda. La visión central es necesaria para ver objetos con claridad y para tareas cotidianas comunes, como leer y manejar un auto.</p>
                            <h3>5.Cataratas</h3>
                            <p>Cataratas son opacidades de la lente en el ojo. La visión con cataratas puede aparecer turbia o borrosa, los colores pueden parecer descoloridos y es posible que observes un gran resplandor.</p>
                            <h3>6.Enfermedad ocular diabética</h3>
                            <p>La enfermedad ocular diabética es una complicación de la diabetes y una de las principales causas de ceguera. La forma más común es la retinopatía diabética que ocurre cuando la diabetes daña los pequeños vasos sanguíneos dentro de la retina. </p>

                        </div>
                    </div><!-- /.gallery-img -->

                @include('includes.article-serv')<!-- /.gallery-desc -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection