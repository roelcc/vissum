@extends('layouts.app')
@section('title','Antecedentes de casos clínicos')
@section('url','https://www.oftalmovissum.pe/casos/testimonio-03')
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
                            <span class="sep">/ testimonio 3</span>
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
                Yo soy católica y vengo del departamento de Amazonas. Un día estaba en la iglesia con mi grupo de amigas y de la nada mi vista empezó a disminuir, empecé a ver bastante borroso, me preocupe bastante, a parte, yo tengo un ojo que es prótesis entonces ya no podía ver nada. Llegué a casa y le conté a mis hijos, estuvimos viendo varias alternativas y viaje a ver a un especialista para operarme de Catarata, me operé y empeoro mi vista, al final me dijeron que tenía problemas de córnea. Me vieron varios médicos y nada, no veía ninguna mejoría. Un día escuchando la radio dijeron que venía una comisión de médicos a un pueblito de mi departamento para atender diversos casos y fui para que me evalúen y me dijeron que mi córnea estaba totalmente destruida por que le había entrado hongos, me dieron un tratamiento para que mejore y nada. Luego viaje a Chiclayo para otro chequeo, y el Dr. Limpió mi vista y me puso un lente de contacto, fui a verlo varias veces hasta que me dijeron que tenía que viajar a Lima para un trasplante de Córnea de manera urgente ya que si no lo hacía iba a quedar ciega de por vida y fue ahí cuando me recomendaron al Dr. Robert Muñoz, ¡Yo había perdido las esperanzas con tantos médicos! pero mis hijos me apoyaron bastante así que decidí ir a la clínica Oftalmo Vissum. Pase consulta, me hicieron una serie de exámenes, me dieron un tratamiento y me operaron de Catarata con éxito, después de 3 meses me hicieron el trasplante de córnea. Gracias al Dr. Robert Muñoz hoy puedo ver y estoy muy contenta con los resultados, tengo que regresar para mis siguientes chequeos, falta poco para que me retiren los puntos y poder regresar a mi tierra con mi familia.
            </p>

            <p><i><b>María Mercedes Salazar Dávila, 72 años </b></i><br></p>
            <p><i><b>DNI: 33812374</b></i></p>

        </article>
    </main>




    <div class="text-center pad bottom">
        <a href="/casos" class="roll-button" title="Servicios Oftalmo Vissum">Volver</a></div>




@endsection