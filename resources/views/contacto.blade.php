@extends('layouts.app')
@section('title','Contactar con Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/contacto')
@section('image','https://www.oftalmovissum.pe/contacto/img/contacto-oftalmo.jpg')
@section('description','Somos la clínica oftalmológica líder en el cuidado de sus ojos,  tecnología de última generación para el diagnóstico y tratamiento de enfermedades oculares.')

@section('content')


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Clínica Oftalmo Vissum</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/</span>
                            Contacto
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Contact Content -->
    <div class="roll-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roll-titlebox text-center">
                        <h1><strong>Contáctenos</strong></h1>
                        <p>Clínica oftalmológica especializada en diagnóstico, tratamiento e investigación con la mejor y más alta tecnología en equipos, trabajo de calidad.</p>
                    </div>
                    <div class="roll-spacer h70"></div>
                    <div class="roll-contact-box">
                        <div class="bg">
                            <img src="/img/contacto1.jpg" alt="contactar a Oftalmo Vissum" title="contactar a Oftalmo Vissum">
                        </div>
                        {{--<div class="info">--}}
                            {{--<h2><strong>Oftalmo Vissum</strong></h2>--}}

                        {{--</div>--}}
                    </div><!-- /.roll-contact-box -->
                    <hr>
                    <div class="roll-spacer h50"></div>
                    <form class="roll-contact-form" method="post" action="./inc/contact/contact-process.php">
                        <div class="form-left">
                            <div class="input-wrap">
                                <input type="text" value="" tabindex="1" placeholder="Nombre *" name="name" id="name" required>
                            </div>
                            <div class="input-wrap">
                                <input type="email" value="" tabindex="2" placeholder="E-mail *" name="email" id="email" required>
                            </div>
                            <div class="input-wrap">
                                <input type="text" value="" tabindex="3" placeholder="Telefono" name="phone" id="phone">
                            </div>
                            <div class="input-wrap">
                                <input type="text" value="" tabindex="4" placeholder="Tema" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="message-wrap">
                                <textarea class="" tabindex="5" placeholder="Mensaje *" name="message" id="message" required></textarea>
                            </div>
                            <div class="send-wrap">
                                <input type="submit" value="Enviar Mensaje" id="submit" name="submit" class="submit roll-button">
                            </div>
                        </div>
                    </form><!-- /.roll-contact-form -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-content -->


@endsection