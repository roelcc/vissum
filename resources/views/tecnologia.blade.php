@extends('layouts.app')
@section('title','Equipos de Tecnologia | Oftalmo Vissum')
@section('url','https://www.oftalmovissum.pe/nosotros')
@section('image','https://www.oftalmovissum.pe/img/tecnologia/equipo1.jpg')
@section('description',' Oftalmo Vissum ofrece los servicios de Consulta Oftalmológica Integral, Consulta de Optometría, exámenes auxiliares, exámenes adicionales, cirugías, óptica.')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <div class="breadcrumb-trail">
                            <h1><strong>Equipos de Tecnología Ocular</strong></h1>
                            <div class="face-share ">
                                @include('includes.share-buttons')
                            </div>
                            <br>
                            <a href="/">Inicio</a><span class="sep">/ Tecnología</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Main Content -->
    <div class="main-content has-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">

                    </div>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="sidebar-2">


                        <aside class="widget widget_shop_cat">
                            <h2 class="widget-title"><strong>Equipo Tecnológico</strong></h2>

                            <p> Presentamos algunos de los Equipos tecnológicos  de los que trabajamos actualmente</p>
                            <div class="accordion">
                                <div class="toggle ">
                                    <div class="toggle-title">
                                     <h3 class="font-h3"> Lampara de Hendidura Kanghua SLM-3ER</h3>  </div>
                                    <div class="toggle-content">
                                      <p>Este equipo permite hacer un estudio en vivo de las partes del ojo, desde la parte más superficial, la córnea, el iris, el cristalino, el vítreo, la retina, etc. Se realiza un estudio completo de la estructura ocular a través de su sistema de hendidura.</p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                       <h3 class="font-h3">Yag Laser Keeler YC-1800 </h3></div>
                                    <div class="toggle-content">
                                      <p>Este quipo permite hacer orificios a través de un rayo láser. Por ejemplo, en el iris produce heridotomía, en la capsula posterior hace una capsulotomia, etc. </p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Pentacam Oculus T4P-70700</h3></div>
                                    <div class="toggle-content">
                                      <p>Este equipo permite hacer un estudio de las imágenes de la córnea; ya sea el grosor, curvatura, elevaciones, irregularidades, descarte de enfermedades como el Queratocono, estudio de la densitometría corneal, ángulos de la cámara anterior, estudio tomográfico, cálculo de lente intraocular, anillos Intracorneales, cirugía refractiva, etc.</p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle ">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Microscopio Especular Nidek CEM.5.30</h3></div>
                                    <div class="toggle-content">
                                      <p>Este equipo permite hacer un recuento de las células que están detrás de la córnea (células endoteliales); son las que te dan la transparencia de la córnea. Permite realizar un examen detallado de cada una de las células, (forma, tamaño, número, densidad, etc.) así como también examen de catarata, cirugía refractiva, lente intraocular faquico.
                                      </p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                       <h3 class="font-h3">Campo Visual Octopus 600 </h3></div>
                                    <div class="toggle-content">
                                    <p>Este equipo permite hacer descarte de glaucoma, evalúa en cada ojo de forma aislada y genera una serie de puntos de menor a mayor intensidad y de manera aleatoria. Descartando lesiones en el nervio óptico.</p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Auto Rrefractometro Potek PRK-6000</h3></div>
                                    <div class="toggle-content">
                                       <p>Este equipo permite hacer la medida de vista en forma automática. Te permite ver las curvaturas de la córnea.</p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Foróptero Nidek RT-600</h3></div>
                                    <div class="toggle-content">
                                        <p>Este equipo permite encontrar la medida adecuada ya que van rotando las lunas hasta lograr la claridad que se necesita de la vista.</p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Equipo de Facoemulsificacion Catarhex 3 Oertli</h3>
                                        </div>
                                    <div class="toggle-content">
                                        <p>Este equipo portátil permite hacer la cirugía de catarata.
                                        </p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Equipo de Facoemulsificacion Catarhex OS4 Oertli</h3></div>
                                    <div class="toggle-content">
                                        <p>Este equipo fijo permite hacer la cirugía de catarata.
                                        </p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle active">
                                    <div class="toggle-title active">
                                        <h3 class="font-h3">Microscopio Quirurgico Leica M620 F20</h3>
                                        </div>
                                    <div class="toggle-content">
                                        <p>Este equipo permite operar y magnificar las imágenes, donde se pueden ver las diferencias de profundidades (esteropcia).
                                        </p>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="toggle">
                                    <div class="toggle-title">
                                        <h3 class="font-h3">Excimer Laser Nidek</h3>
                                        </div>
                                    <div class="toggle-content">
                                        <p>Este equipo permite hacer la cirugía refractiva mediante un rayo láser.
                                        </p>
                                    </div>
                                </div><!-- /.toggle -->
                            </div><!-- /.accordion -->
                        </aside>


                        <aside class="widget widget_tag_cloud">
                            <h2 class="widget-title">Oftalmo <strong>Vissum</strong></h2>
                            <div class="tagcloud">
                                <a href="#">Nosotros</a>
                                <a href="#">Casos</a>
                                <a href="#">Servicios</a>
                                <a href="#">Inicio</a>
                                <a href="#">Tecnologia</a>

                        </aside>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-xs-12">

                    <ul class="product-listing">
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/equipo1.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3>LAMPARA HENDIDURA KANGHUA SLM-3ER</h3></div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo permite hacer un estudio en vivo de las partes del ojo, desde la parte más superficial, la córnea, el iris, el cristalino, el vítreo, la retina, etc.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/keler.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14"><h3>YAG LASER KEELER <br>YC-1800  </h3></div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo permite hacer orificios a través de un rayo láser. en el iris produce heridotomía, en la capsula posterior hace una capsulotomia. </p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/pentcam.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3>PENTACAM OCULUS <br>T4P-70700 </h3>
                                </div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo fijo permite hacer la cirugía de catarata.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->


                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/especular.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3>MICROSCOPIO ESPECULAR NIDEK CEM.5.30</h3></div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo permite hacer un recuento de las células que están detrás de la córnea (células endoteliales)</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/octopus.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos" width="270px" height="270px"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3 > CAMPO VISUAL OCTOPUS 600</h3>
                                </div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo permite hacer descarte de glaucoma, evalúa en cada ojo de forma aislada.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/refractometro.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3>AUTO REFRACTOMETRO POTEK PRK-6000</h3>
                                </div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo fijo permite hacer la cirugía de catarata.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/nider.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14"><h3>FORÓPTERO NIDEK RT-600</h3></div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10"> la medida adecuada ya que van rotando las lunas y lograr la claridad que se necesita de la vista.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/equipo.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3 >EQUIPO DE FACOEMULSIFICACION CATARHEX 3 OERTLI</h3>
                                </div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo portátil permite hacer la cirugía de catarata.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/oertli.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14">
                                    <h3>EQUIPO DE FACOEMULSIFICACION CATARHEX OS4 OERTLI</h3>
                                </div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo fijo permite hacer la cirugía de catarata.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->
                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/leica.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14"><h3>MICROSCOPIO QUIRURGICO LEICA M620</h3></div>
                            </div>

                            {{--<div class="item-info">--}}
                            {{--<p class="pad-t10">Este equipo permite operar y magnificar las imágenes, donde se pueden ver las diferencias de profundidades (esteropcia).</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->


                        <li class="product clearfix">
                            <div class="item-image">
                                <a href="#"><img src="/img/tecnologia/laser.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos"></a>
                                <div class="sale-label text-center font-h14"><h3>EXCIMER LASER NIDEK</h3>
                                    </div>
                            </div>

                            {{--<div class="item-info">--}}
                                {{--<p class="pad-t10">Este equipo permite hacer la cirugía refractiva mediante un rayo láser.</p>--}}
                            {{--</div>--}}
                        </li><!-- /.product -->


                        {{--<li class="product clearfix">--}}
                            {{--<div class="item-image">--}}
                                {{--<a href="#"><img src="/img/tecnologia/pentcam.jpg" alt="Equipos tecnologicos" title="Equipos tecnologicos></a>--}}
                                {{--<div class="sale-label text-center">--}}
                                    {{--PENTACAM OCULUS T4P-70700--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="item-info">--}}
                                {{--<p class="pad-t10">Este equipo permite hacer un estudio de las imágenes de la córnea</p>--}}
                            {{--</div>--}}
                        {{--</li><!-- /.product -->--}}
                        {{--<li class="product clearfix">--}}
                            {{--<div class="item-image">--}}
                                {{--<a href="#"><img src="/img/tecnologia/refractometro.jpg" alt="img" title="></a>--}}
                                {{--<div class="sale-label text-center">AUTO REFRACTOMETRO POTEK PRK-6000</div>--}}
                            {{--</div>--}}

                            {{--<div class="item-info">--}}
                                {{--<p class="pad-t10"> Este equipo permite hacer la medida de vista en forma automática.</p>--}}
                            {{--</div>--}}
                        {{--</li><!-- /.product -->--}}

                    </ul>

                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-content -->


@endsection