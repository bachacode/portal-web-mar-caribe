<?php
defined('BASEPATH') or exit('No se permite acceso directo');
///////////////////////////////////////
// VALORES URI
///////////////////////////////////////
define('URI', $_SERVER['REQUEST_URI']);

//////////////////////////////////////
// Valores de RUTAS
/////////////////////////////////////
define('HOSTING', 'http://localhost');
define('FOLDER_PATH', '/portal-web-mar-caribe');
define ('PATH_CONTROLLERS', 'App/Controllers/');
define ('PATH_MODELS', '/portal-web-mar-caribe/App/Models/');
define ('PATH_ASSETS', '/portal-web-mar-caribe/Assets/');
define ('PATH_VIEWS', '/portal-web-mar-caribe/App/Views/');
define ('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('HELPER_PATH', '/portal-web-mar-caribe/Config/helpers/');

//////////////////////////////////////
// Valores de CORE
/////////////////////////////////////

define ('CORE', 'Config/Core/');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

/*define('HOST', 'localhost');
define('USER', 'admin');
define('PASSWORD', 'admin');
define('DB_NAME', 'TiendaMarCaribeCenter');
define ('PORT', '5432');
*/

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'tiendamarcaribecenter');


//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);


?>