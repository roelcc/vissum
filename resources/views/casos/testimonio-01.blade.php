@extends('layouts.app')
@section('title','Antecedentes de casos clínicos')
@section('url','https://www.oftalmovissum.pe/casos/testimonio-01')
@section('image','https://www.oftalmovissum.pe/img/servicios/cirugias/servicio-cirugia.jpg')
@section('content')

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Casos y Testimonios</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span>
                            <a href="/servicios">Casos</a>
                            <span class="sep">/ testimonio 1</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <main>
        <article>
            <h1>CASOS DE ÉXITO</h1>
            <hr>
            <p>
                Sufría de miopía desde los 6 años y con el tiempo desarrolle astigmatismo, a los 22 años desarrolle ojo perezoso y ya no veía muy bien con ambos ojos, las letras distorsionadas, me dolía mucho la cabeza y hoy en día mi trabajo es estar en la computadora de manera perenne ya no soportaba el malestar de mi vista, y decidí operarme. Estuve buscando muchas opciones hasta que opte por la Clínica Oftalmo Vissum, tuve muy buenas referencias así que no lo pensé más y decidí ponerme en las manos del Dr. Robert Muñoz. Todo fue muy rápido, me realizaron varios exámenes previos a la Cirugía Refractiva, me quede sorprendida por la rapidez de estos y a la vez con muchos nervios esperando que llegue el día de la operación.
            </p>
            <p>Hasta que llegó por fin el día, seguía muy nerviosa pero el Dr. Robert Muñoz me dio la confianza y me dijo que todo saldría bien, fue tan rápido que no lo podía creer. Al día siguiente me desperté y ya podía leer los subtítulos de las noticias con total claridad, ES INCREIBLE! Estoy más que contenta y agradecida! y lo mejor de todo es que no quedo ni una sola cicatriz. GRACIAS!</p>
            <p><i><b>Yanque Cutipa Adit Mariela, 29 años </b></i><br></p>
            <p><i><b>DNI: 44929441</b></i></p>

        </article>
    </main>




        <div class="text-center pad bottom">
            <a href="/casos" class="roll-button" title="Servicios Oftalmo Vissum">Volver</a></div>




@endsection