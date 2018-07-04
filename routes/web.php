<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','InicioController@index');
Route::get('/nosotros','InicioController@nosotros');
Route::get('/servicios','InicioController@Servicios');
Route::get('/casos','InicioController@Casos');
Route::get('/tecnologia','InicioController@Tecnologia');
Route::get('/contacto','InicioController@contacto');
Route::get('/staff-medico','InicioController@staffMedico');
Route::get('/blog','InicioController@Article');
Route::get('/contacto/correo','InicioController@Gracias');
Route::get('/contacto/llamada','InicioController@Phone');



Route::get('/servicios/cirugias','ServiciosController@Cirugias');
Route::get('/servicios/consulta-optometria','ServiciosController@consultaOptometria');
Route::get('/servicios/examenes-adicionales','ServiciosController@examenesAdicionales');
Route::get('/servicios/examenes-auxiliares','ServiciosController@examenesAuxiliares');
Route::get('/servicios/oftalmologica-integral','ServiciosController@oftalmologicaIntegral');
Route::get('/servicios/optica','ServiciosController@Optica');

Route::get('/casos/testimonio-01','CasosController@Testimonio01');
Route::get('/casos/testimonio-02','CasosController@Testimonio02');
Route::get('/casos/testimonio-03','CasosController@Testimonio03');

Route::get('/blog/10-consejos-para-su-salud-ocular-que-puede-seguir-ahora-mismo','BlogController@Consejos');
Route::get('/blog/porque-tengo-los-ojos-llorosos-aqui-las-principales-razones','BlogController@ojosLlorosos');
Route::get('/blog/colirio-gotas-para-los-ojos-cuales-son-adecuados-para-mi','BlogController@Colirio');
Route::get('/blog/cirugia-ocular-para-mejorar-tu-vista-como-saber-si-es-indicada-para-mi','BlogController@Cirugia');
Route::get('/blog/enfermedades-oculares-que-vienen-con-la-edad','BlogController@Enfermedades');
Route::get('/blog/que-es-la-conjuntivitis-y-como-podemos-prevenirla-10-consejos','BlogController@ojos');
Route::get('/blog/lentes-de-contacto-tipos-y-cuales-me-convienen','BlogController@Lentes');
Route::get('/blog/10-consejos-para-quienes-usan-lentes-de-contacto','BlogController@Contacto');
Route::get('/blog/si-usas-anteojos-te-damos-los-mejores-consejos','BlogController@Mejores');
Route::get('/blog/te-presentamos-los-ultimos-desarrollos-en-tecnologia-para-lentes-y-anteojos','BlogController@Tecnologia');


