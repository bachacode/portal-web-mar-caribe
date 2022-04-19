<?php
define('BASEPATH', true);

require 'Config/config.php';
require CORE . 'autoload.php';

/*******************************
 * Nivel de errores notificados *
 *******************************/
error_reporting(ERROR_REPORTING_LEVEL);

/*****************************************************
 * Inicializa Router y detección de valores de la URI *
 *****************************************************/
$router = new Router();

$carpeta = $router -> getFolder();
$controlador = $router -> getController();
$metodo = $router -> getMethod();
$param = $router -> getParam();

/*******************************************************
 * Validaciones e inclusión del controlador y el metodo *
 ******************************************************
/*
if(!CoreHelper::validateController($carpeta,$controlador))
  $controlador = 'ErrorPage';
*/
//echo "$carpeta";

require PATH_CONTROLLERS. "{$carpeta}/{$controlador}Controller.php";

$controlador .= 'Controller';

/*
if(!CoreHelper::validateMethodController($controlador, $metodo))
  $metodo = 'exec';
  */

/***********************************************************************
 * Ejecución final del controlador, método y parámetro obtenido por URI *
 ***********************************************************************/
$controller = new $controlador($carpeta);
$controller -> $metodo($param);