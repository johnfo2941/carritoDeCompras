<?php


/**
 * inicialización de sesión de ususario
 */

session_start();

/**
 * primero se define el URL de nuestro sitio
 * URL constante
 **/ 

define('PORT'     , '8848');
define('BASEPATH' , '/Carrito_Compras/');
define('URL'      , 'http://127.0.0.1:'.PORT.BASEPATH);

/**
 * Constantes para los paths de archivos
 */
define('DS'       , DIRECTORY_SEPARATOR);// barra invertida para dividir la url
define('ROOT'     , getcwd().DS);//directorio del proyecto
define('APP'      , ROOT.'app'.DS);//folder de app
define('INCLUDES' , ROOT.'includes'.DS);//folder de includes
define('VIEWS'    , ROOT.'views'.DS);// folder de vistas

// constantes dinámicas 
define('ASSETS'  , URL.'assets/');
define('CSS'     , ASSETS.'css/');
define('IMAGENES'  , ASSETS.'imagenes/');
define('JS'      , ASSETS.'js/');
define('PLUGINS' , ASSETS.'plugins/');

/**
 * constantes adicionáles 
 */
define ('SHIPPING_COST', 555555);//CONTANTE PARA HACER CAMBIOS MASIVOS EJEMPLO CUANDO SE CAMBIA EL PRECIO DE EL PRODUCTO

// incluir el archivo de las funciones

require_once(APP.'functions.php');