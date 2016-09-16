<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// para el registro e ingreso de los usuarios

Route::get('inicio-de-sesion', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('inicio-de-sesion', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'login'
]);
Route::get('cerrar-sesion', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'logout'
]);

//******** para la recuperacion de contrasenas

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// registration routes
Route::get('registro', [
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::POST('registro', [
    'uses'  => 'Auth\AuthController@POSTRegister',
    'as'    => 'register'
]);

// para ususarios autenticados

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);

    Route::get('notificacion', [
        'uses'  => 'HomeController@getNotificacion',
        'as'    => 'getNotificacion'
    ]);

    Route::get('mision', [
        'uses'  => 'HomeController@getMision',
        'as'    => 'getMision'
    ]);

    Route::get('planificacion', [
        'uses'  => 'HomeController@getPlanificacion',
        'as'    => 'getPlanificacion'
    ]);

    Route::get('riesgos-inherentes', [
        'uses'  => 'HomeController@getRiesgosInherentes',
        'as'    => 'planificacion.getRiesgosInherentes'
    ]);

    Route::post('riesgos-inherentes', [
        'uses'  => 'HomeController@postRiesgosInherentes',
        'as'    => 'planificacion.postRiesgosInherentes'
    ]);

    Route::get('definir-personal', [
        'uses'  => 'HomeController@getDefinirPersonal',
        'as'    => 'planificacion.getDefinirPersonal'
    ]);

    Route::post('definir-personal', [
        'uses'  => 'HomeController@postDefinirPersonal',
        'as'    => 'planificacion.postDefinirPersonal'
    ]);

    Route::get('programacion-pruebas', [
        'uses'  => 'HomeController@getProgramacionPruebas',
        'as'    => 'planificacion.getProgramacionPruebas'
    ]);

    Route::post('programacion-pruebas', [
        'uses'  => 'HomeController@postProgramacionPruebas',
        'as'    => 'planificacion.postProgramacionPruebas'
    ]);

    Route::get('lugares-penetracion', [
        'uses'  => 'HomeController@getLugaresPenetracion',
        'as'    => 'planificacion.getLugaresPenetracion'
    ]);

    Route::post('lugares-penetracion', [
        'uses'  => 'HomeController@postLugaresPenetracion',
        'as'    => 'planificacion.postLugaresPenetracion'
    ]);

    Route::get('niveles-acceso', [
        'uses'  => 'HomeController@getNivelesAcceso',
        'as'    => 'planificacion.getNivelesAcceso'
    ]);

    Route::post('niveles-acceso', [
        'uses'  => 'HomeController@postNivelesAcceso',
        'as'    => 'planificacion.postNivelesAcceso'
    ]);

    Route::get('cumplimiento-politicas', [
        'uses'  => 'HomeController@getCumplimientoPoliticas',
        'as'    => 'planificacion.getCumplimientoPoliticas'
    ]);

    Route::post('cumplimiento-politicas', [
        'uses'  => 'HomeController@postCumplimientoPoliticas',
        'as'    => 'planificacion.postCumplimientoPoliticas'
    ]);

    Route::get('descubrimiento', [
        'uses'  => 'HomeController@getDescubrimiento',
        'as'    => 'getDescubrimiento'
    ]);

    Route::get('escaneos', [
        'uses'  => 'HomeController@getEscaneo',
        'as'    => 'descubrimiento.getEscaneo'
    ]);

    Route::post('escaneos', [
        'uses'  => 'HomeController@postEscaneo',
        'as'    => 'descubrimiento.postEscaneo'
    ]);

    Route::get('vulnerabilidades', [
        'uses'  => 'HomeController@getVulnerabilidades',
        'as'    => 'descubrimiento.getVulnerabilidades'
    ]);

    Route::post('vulnerabilidades', [
        'uses'  => 'HomeController@postVulnerabilidades',
        'as'    => 'descubrimiento.postVulnerabilidades'
    ]);

    Route::get('ataque', [
        'uses'  => 'HomeController@getAtaques',
        'as'    => 'getAtaques'
    ]);

    Route::get('agregar-ataque', [
        'uses'  => 'HomeController@getAgregarAtaque',
        'as'    => 'ataque.getAgregarAtaque'
    ]);

    Route::post('agregar-ataque', [
        'uses'  => 'HomeController@postAgregarAtaque',
        'as'    => 'ataque.postAgregarAtaque'
    ]);

    Route::get('reporte', [
        'uses'  => 'HomeController@getReporte',
        'as'    => 'getReporte'
    ]);

    Route::get('variables-actuales', [
        'uses'  => 'HomeController@getVariables',
        'as'    => 'reporte.getVariables'
    ]);

    Route::get('sugerencias', [
        'uses'  => 'HomeController@getSugerencia',
        'as'    => 'reporte.getSugerencia'
    ]);












    // para los cursos **************************************************************

    Route::get('agregar_curso', [
        'uses'  => 'CourseController@agregarCurso',
        'as'    => 'agregarCurso'
    ]);

    Route::post('agregar_curso', [
        'uses'  => 'CourseController@guardarCurso',
        'as'    => 'guardarCurso'
    ]);

    Route::get('curso/{id}', [
        'uses'  => 'CourseController@course',
        'as'    => 'course'
    ]);

    Route::get('editar_curso/{id}', [
        'uses'  => 'CourseController@editarCurso',
        'as'    => 'editarCurso'
    ]);

    Route::put('actualizar_curso', [
        'uses'  => 'CourseController@actualizarCurso',
        'as'    => 'actualizarCurso'
    ]);

    Route::get('eliminar_curso/{id}', [
        'uses'  => 'CourseController@borrarCurso',
        'as'    => 'borrarCurso'
    ]);

    // para las unidades de formacion *******************************

    Route::get('unidad', [
        'uses'  => 'UnityController@unidades',
        'as'    => 'unidad'
    ]);

    Route::get('agregar_unidad', [
        'uses'  => 'UnityController@agregarUnidad',
        'as'    => 'agregarUnidad'
    ]);

    Route::post('agregar_unidad', [
        'uses'  => 'UnityController@guardarUnidad',
        'as'    => 'guardarUnidad'
    ]);

    Route::get('editar_unidad/{id}', [
        'uses'  => 'UnityController@editarUnidad',
        'as'    => 'editarUnidad'
    ]);

    Route::put('actualizar_unidad', [
        'uses'  => 'UnityController@actualizarUnidad',
        'as'    => 'actualizarUnidad'
    ]);

    Route::get('eliminar_unidad/{id}', [
        'uses'  => 'UnityController@borrarUnidad',
        'as'    => 'borrarUnidad'
    ]);

    // para los usuarios **************************************************************

    Route::get('usuarios/{id}', [       // respecto de la unidad
        'uses'  => 'UserController@user',
        'as'    => 'user'
    ]);

    Route::get('usuarios', [
        'uses'  => 'UserController@usuarios',
        'as'    => 'usuarios'
    ]);

    Route::get('editar_usuario/{id}', [
        'uses'  => 'UserController@editarUsuario',
        'as'    => 'editarUsuario'
    ]);

    Route::post('editar_usuario', [
        'uses'  => 'UserController@guardarUsuario',
        'as'    => 'guardarUsuario'
    ]);

    Route::get('desactivar_usuario/{id}', [
        'uses'  => 'UserController@desactivarUsuario',
        'as'    => 'desactivarUsuario'
    ]);

    Route::get('activar_usuario/{id}', [
        'uses'  => 'UserController@activarUsuario',
        'as'    => 'activarUsuario'
    ]);

    Route::get('nuevo_usuario', [
        'uses'  => 'UserController@nuevoUsuario',
        'as'    => 'nuevoUsuario'
    ]);

    Route::post('actualizar_usuario', [
        'uses'  => 'UserController@actualizarUsuario',
        'as'    => 'actualizarUsuario'
    ]);

    // para los kardex **************************************************************
    
    Route::get('kardex/{id}', [
        'uses'  => 'KardexController@kardex',
        'as'    => 'kardex'
    ]);
    
    Route::get('buscar_estudiante/{id}', [
        'uses'  => 'KardexController@buscarEstudiante',
        'as'    => 'buscarEstudiante'
    ]);

    Route::post('buscar_estudiante', [
        'uses'  => 'KardexController@encontradoEstudiante',
        'as'    => 'encontradoEstudiante'
    ]);

    Route::get('nuevo_kardex/{id}/{ci}', [
        'uses'  => 'KardexController@nuevoKardex',
        'as'    => 'nuevoKardex'
    ]);
    
    Route::post('guardar_kardex', [
        'uses'  => 'KardexController@guardarKardex',
        'as'    => 'guardarKardex'
    ]);
    
    Route::get('borrar_kardex/{id}', [
        'uses'  => 'KardexController@borrarKardex',
        'as'    => 'borrarKardex'
    ]);

    // para los cargos **************************************************************
    
    Route::get('cargo', [
        'uses'  => 'UserController@cargo',
        'as'    => 'cargo'
    ]);

//    Route::get('nuevo_cargo', [
//        'uses'  => 'CargoController@nuevoCargo',
//        'as'    => 'nuevoCargo'
//    ]);
//
//    Route::post('guardar_cargo', [
//        'uses'  => 'CargoController@guardarCargo',
//        'as'    => 'guardarCargo'
//    ]);
//
//    Route::get('editar_cargo/{id}', [
//        'uses'  => 'CargoController@editarCargo',
//        'as'    => 'editarCargo'
//    ]);
//
//    Route::post('actualizar_cargo', [
//        'uses'  => 'CargoController@actualizarCargo',
//        'as'    => 'actualizarCargo'
//    ]);
//
//    Route::get('borrar_cargo/{id}', [
//        'uses'  => 'CargoController@borrarCargo',
//        'as'    => 'borrarCargo'
//    ]);

    // para los temas **************************************************************

    Route::get('topic/{id}', [
        'uses'  => 'TopicController@topic',
        'as'    => 'topic'
    ]);

    Route::get('nuevo_topic/{id}', [
        'uses'  => 'TopicController@nuevoTopic',
        'as'    => 'nuevoTopic'
    ]);

    Route::post('guardar_topic', [
        'uses'  => 'TopicController@guardarTopic',
        'as'    => 'guardarTopic'
    ]);

    Route::get('borrar_topic/{id}', [
        'uses'  => 'TopicController@borrarTopic',
        'as'    => 'borrarTopic'
    ]);
    
    // para los registros **************************************************************

    Route::get('record/{id}', [
        'uses'  => 'RecordController@record',
        'as'    => 'record'
    ]);

    Route::get('nuevo_registro/{id}', [
        'uses'  => 'RecordController@nuevoRegistro',
        'as'    => 'nuevoRegistro'
    ]);

    Route::post('guardar_registro', [
        'uses'  => 'RecordController@guardarRegistro',
        'as'    => 'guardarRegistro'
    ]);

    Route::get('borrar_registro/{id}', [
        'uses'  => 'RecordController@borrarRegistro',
        'as'    => 'borrarRegistro'
    ]);

    // para las certificaciones **************************************************************

    Route::get('buscar_egresado', [
        'uses'  => 'CertificadosController@buscarEgresado',
        'as'    => 'buscarEgresado'
    ]);

    Route::post('buscar_egresado', [
        'uses'  => 'CertificadosController@encontradoEgresado',
        'as'    => 'encontradoEgresado'
    ]);

    Route::get('nuevo_certificado/{id}', [
        'uses'  => 'CertificadosController@nuevoCertificadoEgreso',
        'as'    => 'nuevoCertificadoEgreso'
    ]);

    Route::get('buscar_aspirante', [
        'uses'  => 'CertificadosController@buscarAspirante',
        'as'    => 'buscarAspirante'
    ]);

    Route::post('buscar_aspirante', [
        'uses'  => 'CertificadosController@encontradoAspirante',
        'as'    => 'encontradoAspirante'
    ]);

    Route::get('buscar_aspirante_apellidos', [
        'uses'  => 'CertificadosController@buscarAspiranteApellidos',
        'as'    => 'buscarAspiranteApellidos'
    ]);

    Route::post('buscar_aspirante_apellidos', [
        'uses'  => 'CertificadosController@encontradoAspiranteApellidos',
        'as'    => 'encontradoAspiranteApellidos'
    ]);

    Route::get('nuevo_aspirante/{id}', [
        'uses'  => 'CertificadosController@nuevoCertificadoAspirante',
        'as'    => 'nuevoCertificadoAspirante'
    ]);

    Route::get('busqueda_aspirante/{id}', [
        'uses'  => 'CertificadosController@busquedaAspirante',
        'as'    => 'busquedaAspirante'
    ]);

    Route::get('busqueda_aspirante_apellidos', [
        'uses'  => 'CertificadosController@getBusquedaAspiranteApellidos',
        'as'    => 'getBusquedaAspiranteApellidos'
    ]);

    Route::post('busqueda_aspirante_apellidos', [
        'uses'  => 'CertificadosController@postBusquedaAspiranteApellidos',
        'as'    => 'postBusquedaAspiranteApellidos'
    ]);

    Route::post('nuevo_aspirante', [
        'uses'  => 'CertificadosController@nuevoCertificadoAspiranteNada',
        'as'    => 'nuevoCertificadoAspiranteNada'
    ]);

    //**************** para cambiar contrasena **********************

    Route::get('cambiar_pass', [
        'uses'  => 'HomeController@cambiarPassword',
        'as'    => 'cambiarPassword'
    ]);

    Route::put('cambiar_pass', [
        'uses'  => 'HomeController@cambiadoPassword',
        'as'    => 'cambiadoPassword'
    ]);

    //**************** para los reportes **********************

    Route::get('busquedaBajas', [
        'uses'  => 'ReportesController@getBusquedaBajas',
        'as'    => 'getBusquedaBajas'
    ]);

    Route::post('busquedaBajas', [
        'uses'  => 'ReportesController@postBusquedaBajas',
        'as'    => 'postBusquedaBajas'
    ]);

    //**************** para los restful **********************

    Route::get('listarUnidades', [
        'uses'  => 'RestController@listarUnidades',
        'as'    => 'restListarUnidades'
    ]);

    Route::get('listarCursos/{id}', [
        'uses'  => 'RestController@listarCursos',
        'as'    => 'restListarCursos'
    ]);

});

