@extends('layouts.app')
@section('title','Antecedentes de casos clínicos')
@section('url','https://www.oftalmovissum.pe/casos/testimonio-02')
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
                            <span class="sep">/ testimonio 2</span>
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

                Desde que tengo usa de razón siempre he usado lentes, los doctores siempre me recomendaban usar lentes porque sufría miopía y astigmatismo, ¡Nunca me ha gustado usar lentes!, el tiempo paso, exigí demasiado mi vista y año a año fue aumentando cada vez más y a partir de los 32 años fue más difícil todo, tengo el ceño fruncido por forzar siempre la vista hasta que decidí operarme. Un buen amigo me recomendó al Dr. Robert Muñoz de la Clínica Oftalmo Vissum así que vine y me atendieron muy bien, me hicieron los exámenes correspondientes y ya tengo dos días de operado y me siento muy satisfecho. Me quede sorprendido por la rapidez, pensé que me dormirían pero no fue así, estuve consiente todo el tiempo y nunca pensé que iba a ser tan rápida la cirugía Refractiva. Estaba muy nervioso al principio ya que mi vista estaba de por medio pero gracias a las recomendaciones y experiencia del Dr. Robert, confié en él y le entregue mis ojos.

            </p>

            <p><i><b>Miguel Ángel Díaz Gómez, 42 años. </b></i><br></p>
            <p><i><b>DNI: 25773155</b></i></p>

        </article>
    </main>




    <div class="text-center pad bottom">
        <a href="/casos" class="roll-button" title="Servicios Oftalmo Vissum">Volver</a></div>




@endsection