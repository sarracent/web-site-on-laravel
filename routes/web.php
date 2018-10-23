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

Route::group(['middleware' => ['https']], function() {
   
Route::get('/noticias', function () {
    return view('Noticias');
});
Route::get('/', function () {
    return view('Inicio');
});
Route::get('/negocios', function () {
    return view('Negocios');
});
Route::get('/inicio', function () {
    return view('Inicio');
});
Route::get('/empresas', function () {
    return view('Empresas');
});
Route::get('/otros', function () {
    return view('Other');
});
Route::get('/galeria', function () {
    return view('Galeria');
});

//Auth::routes();//Descomentar

Route::post('/noticias/noticia', 'NoticiasController@cuerponoticiasid'); //cuerpo de la noticia
Route::get('/noticias/noticia', 'NoticiasController@cuerponoticiasid'); //cuerpo de la noticia
Route::get('/noticias/noticiabus', 'NoticiasController@cuerponoticiasidbuscar');
Route::post('/buscar', 'NoticiasController@buscar'); //buscar en seccion2 de noticias
Route::post('/empresas/estructura', 'EstructuraController@contactosDireccion'); //lista de estructura de Biocubafarma
Route::post('/empresas/clasificacion', 'EstructuraController@clasificacionEmpresas');
Route::get('/empresas/clasificaciontodas', 'EstructuraController@todasEmpresas');
Route::post('/empresas/infoempresas', 'EstructuraController@infoEmpresas'); //informacion de cada empresa
Route::get('/empresas/infoempresasbus', 'EstructuraController@infoEmpresasbuscar');
Route::post('/empresas/buscar', 'EstructuraController@buscar'); //buscar en seccion2 de empresas
Route::post('/negocios/clasificacion', 'NegociosController@clasificacionNegocios'); //lista programas de alto impacto social
Route::post('/negocios/info', 'NegociosController@infoNegocios');
Route::get('/negocios/infon', 'NegociosController@infonNegocios');
Route::post('/negocios/infoneg', 'NegociosController@info'); //informacion de cada negocio
Route::post('/negocios/infomacion', 'NegociosController@cuerponoticia');
Route::get('/otros/discurso', 'FidelcienciaController@cuerponoticiasid');
Route::get('/menufidel', 'FidelcienciaController@menufidel');
Route::post('/otros/noticiainteres', 'InteresController@cuerponoticiasid');
Route::get('/enlace-interes', 'InteresController@menuinteres');
//Route::get('/noticias/buscartodo', 'buscarCompleto@buscar');
Route::get('/resultado-busqueda', 'buscarCompleto@buscar');
//Busqueda
Route::get('/noticias/resultado-busqueda', 'buscarCompleto@buscar');
Route::get('/empresas/resultado-busqueda', 'buscarCompleto@buscar');
Route::get('/negocios/resultado-busqueda', 'buscarCompleto@buscar');
//Route::get('/otros/resultado-busqueda', 'buscarCompleto@buscar');
//Route::get('/negocios/buscartodo', 'buscarCompleto@buscar');
//Route::get('/otros/buscartodo', 'buscarCompleto@buscar');
//Route::get('/inicio/buscartodo', 'buscarCompleto@buscar');
//Route::get('/otros/buscartodo', 'buscarCompleto@buscar');
//Route::get('/galeria/buscartodo', 'buscarCompleto@buscar');
//Route::post('/busqueda', 'buscarCompleto@buscartodo');
Route::post('/enviar', 'mailController@sendemail'); //enviar correo
Route::post('/inicio/enviar', 'mailController@sendemail');
Route::post('/noticias/enviar', 'mailController@sendemail');
Route::post('/empresas/enviar', 'mailController@sendemail');
Route::post('/galeria/enviar', 'mailController@sendemail');
Route::post('/otro/enviar', 'mailController@sendemail');
Route::post('/negocio/enviar', 'mailController@sendemail');
Route::get('/outlook', 'mailController@ejecutar');
Route::get('feed', 'rssController@feed');

//Route::get('/login', 'Auth\LoginController@index')->name('login');//Descomentar
 
    
});

//Descomentar
/*Route::group(['middleware' => ['https','auth']], function() {

    
    Route::get('/logout', function () {
        Session::flush();
        return view('Inicio');
    });
    Route::resource('noticias/noticias', 'Noticias\\NoticiasController');
    Route::resource('empresas/empresas', 'Empresas\\EmpresasController');
    Route::resource('comercionegocios/comercionegocios', 'Comercionegocios\\ComercionegociosController');
    Route::resource('estructuras/estructuras', 'Estructuras\\EstructurasController');
    Route::resource('fidelciencias/fidelciencias', 'Fidelciencias\\FidelcienciasController');
    Route::resource('galeria/galeria', 'Galeria\\GaleriaController');
    Route::resource('interes/interes', 'Interes\\InteresController');
    Route::resource('negocios/negocios', 'Negocios\\NegociosController');
    Route::resource('clasifnegocios/clasifnegocios', 'Clasifnegocios\\ClasifnegociosController');
    Route::get('admin', 'Admin\AdminController@index');
    Route::get('admin/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
    Route::post('admin/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
    Route::resource('admin/roles', 'Admin\RolesController');
    Route::resource('admin/permissions', 'Admin\PermissionsController');
    Route::resource('admin/users', 'Admin\UsersController');
    Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
    Route::resource('imagenes/imagenes', 'Imagenes\\ImagenesController');
    Route::resource('inicio/inicio', 'Inicio\\InicioController');
    Route::resource('menubaner/menubaner', 'Menubaner\\MenubanerController');
    Route::resource('footer/footer', 'Footer\\FooterController');
    //Route::resource('imagenempresas/imagenempresas', 'Imagenempresas\\ImagenempresasController');
    Route::resource('catalogo/catalogo', 'Catalogo\\CatalogoController');
    Route::resource('footer/footer', 'Footer\\FooterController');
    Route::resource('fotonegocio/fotonegocio', 'Fotonegocio\\FotonegocioController');
    Route::resource('fotoempresa/fotoempresa', 'Fotoempresa\\FotoempresaController');
    Route::resource('fotocomercionegocio/fotocomercionegocio', 'Fotocomercionegocio\\FotocomercionegocioController');
    Route::resource('menuenlace/menuenlace', 'Menuenlace\\MenuenlaceController');
  
    Route::get('/register', function () {
        
    });
});*/
